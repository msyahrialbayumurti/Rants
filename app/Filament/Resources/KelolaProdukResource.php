<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KelolaProdukResource\Pages;
use App\Models\KelolaProduk;
use App\Models\Produk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Notifications\Notification;

class KelolaProdukResource extends Resource
{
    protected static ?string $model = KelolaProduk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationLabel(): string
    {
        return 'Kelola Layanan';
    }

    // Form untuk input/edit data
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Dropdown untuk memilih tipe produk
                Forms\Components\Select::make('produk_tipe')
                    ->label('Tipe Produk')
                    ->options([
                        'makeup' => 'Makeup',
                        'kostum' => 'Kostum',
                        'jasa_tari' => 'Jasa Tari',
                    ])
                    ->reactive() // Memicu perubahan pada field lain
                    // ->required(fn ($get) => !$get('produk_id')) // Wajib diisi jika produk_id kosong
                    ->helperText('Pilih tipe produk sesuai dengan kategori.')
                    ->dehydrateStateUsing(fn ($state) => $state ?: null), // Mencegah notifikasi error

                // Dropdown untuk memilih produk dari tabel produks
                Forms\Components\Select::make('produk_id')
                    ->label('Pilih Produk dari Tabel Produk')
                    ->options(Produk::query()->pluck('nama_produk', 'id')) // Mengambil semua data produk
                    ->searchable()
                    ->required(fn ($get) => !$get('produk_tipe')) // Wajib diisi jika produk_tipe kosong
                    ->helperText('Pilih produk yang sudah ditambahkan dari tabel produks.')
                    ->dehydrateStateUsing(fn ($state) => $state ?: null), // Mencegah notifikasi error

                // Field dinamis untuk makeup
                Forms\Components\Fieldset::make('Makeup Details')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar')
                            ->required()
                            ->helperText('Upload gambar produk makeup.')
                            ->dehydrateStateUsing(fn ($state) => $state ?: null), // Mencegah notifikasi error
                        Forms\Components\TextInput::make('harga')
                            ->label('Harga')
                            ->numeric()
                            ->required()
                            ->helperText('Masukkan harga produk makeup.')
                            ->dehydrateStateUsing(fn ($state) => $state ?: null), // Mencegah notifikasi error
                    ])
                    ->visible(fn ($get) => $get('produk_tipe') === 'makeup'),

                // Field dinamis untuk kostum
                Forms\Components\Fieldset::make('Kostum Details')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar')
                            ->required()
                            ->helperText('Upload gambar produk kostum.')
                            ->dehydrateStateUsing(fn ($state) => $state ?: null), // Mencegah notifikasi error
                        Forms\Components\TextInput::make('nama_kostum')
                            ->label('Nama Kostum')
                            ->required()
                            ->helperText('Masukkan nama kostum.')
                            ->dehydrateStateUsing(fn ($state) => $state ?: null),
                        Forms\Components\TextInput::make('ukuran')
                            ->label('Ukuran')
                            ->required()
                            ->helperText('Masukkan ukuran kostum.')
                            ->dehydrateStateUsing(fn ($state) => $state ?: null),
                        Forms\Components\TextInput::make('warna')
                            ->label('Warna')
                            ->required()
                            ->helperText('Masukkan warna kostum.')
                            ->dehydrateStateUsing(fn ($state) => $state ?: null),
                        Forms\Components\TextInput::make('jumlah')
                            ->label('Jumlah')
                            ->numeric()
                            ->required()
                            ->helperText('Masukkan jumlah kostum.')
                            ->dehydrateStateUsing(fn ($state) => $state ?: null),
                        Forms\Components\TextInput::make('harga')
                            ->label('Harga')
                            ->numeric()
                            ->required()
                            ->helperText('Masukkan harga kostum.')
                            ->dehydrateStateUsing(fn ($state) => $state ?: null),
                    ])
                    ->visible(fn ($get) => $get('produk_tipe') === 'kostum'),

                // Field dinamis untuk jasa tari
                Forms\Components\Fieldset::make('Jasa Tari Details')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar')
                            ->required()
                            ->helperText('Upload gambar produk jasa tari.')
                            ->dehydrateStateUsing(fn ($state) => $state ?: null), // Mencegah notifikasi error
                        Forms\Components\TextInput::make('jumlah_penari')
                            ->label('Jumlah Penari')
                            ->numeric()
                            ->required()
                            ->helperText('Masukkan jumlah penari.')
                            ->dehydrateStateUsing(fn ($state) => $state ?: null),
                        Forms\Components\TextInput::make('jenis_tarian')
                            ->label('Jenis Tarian')
                            ->required()
                            ->helperText('Masukkan jenis tarian.')
                            ->dehydrateStateUsing(fn ($state) => $state ?: null),
                        Forms\Components\Textarea::make('deskripsi_acara')
                            ->label('Deskripsi Acara')
                            ->required()
                            ->helperText('Masukkan deskripsi acara.')
                            ->dehydrateStateUsing(fn ($state) => $state ?: null),
                    ])
                    ->visible(fn ($get) => $get('produk_tipe') === 'jasa_tari'),
            ]);
    }

    // Tabel untuk menampilkan data
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom Tipe Produk
                Tables\Columns\TextColumn::make('produk_tipe')
                    ->label('Tipe Produk')
                    ->sortable()
                    ->searchable()
                    ->getStateUsing(fn ($record) => $record->produk_tipe ?? 'Unknown'), // Fallback jika null

                // Kolom Produk
                Tables\Columns\TextColumn::make('produk.nama_produk')
                    ->label('Nama Produk')
                    ->sortable()
                    ->searchable(),

                // Kolom Harga
                Tables\Columns\TextColumn::make('harga')
                    ->label('Harga')
                    ->visible(fn ($record) => isset($record->produk_tipe) && in_array($record->produk_tipe, ['makeup', 'kostum'])),

                // Kolom Nama Kostum
                Tables\Columns\TextColumn::make('nama_kostum')
                    ->label('Nama Kostum')
                    ->visible(fn ($record) => isset($record->produk_tipe) && $record->produk_tipe === 'kostum'),

                // Kolom Ukuran
                Tables\Columns\TextColumn::make('ukuran')
                    ->label('Ukuran')
                    ->visible(fn ($record) => isset($record->produk_tipe) && $record->produk_tipe === 'kostum'),

                // Kolom Warna
                Tables\Columns\TextColumn::make('warna')
                    ->label('Warna')
                    ->visible(fn ($record) => isset($record->produk_tipe) && $record->produk_tipe === 'kostum'),

                // Kolom Jumlah Penari
                Tables\Columns\TextColumn::make('jumlah_penari')
                    ->label('Jumlah Penari')
                    ->visible(fn ($record) => isset($record->produk_tipe) && $record->produk_tipe === 'jasa_tari'),

                // Kolom Jenis Tarian
                Tables\Columns\TextColumn::make('jenis_tarian')
                    ->label('Jenis Tarian')
                    ->visible(fn ($record) => isset($record->produk_tipe) && $record->produk_tipe === 'jasa_tari'),

                // Kolom Gambar
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->size(50),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('produk_tipe')
                    ->options([
                        'makeup' => 'Makeup',
                        'kostum' => 'Kostum',
                        'jasa_tari' => 'Jasa Tari',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    // Halaman untuk resource
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKelolaProduks::route('/'),
            'create' => Pages\CreateKelolaProduk::route('/create'),
            'edit' => Pages\EditKelolaProduk::route('/{record}/edit'),
        ];
    }
}