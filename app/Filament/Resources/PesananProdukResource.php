<?php
namespace App\Filament\Resources;

use App\Filament\Resources\PesananProdukResource\Pages;
use App\Models\PesananKostum;
use App\Models\PesananMakeup;
use App\Models\PesananPenyewaanJasaTari;
use App\Models\PesananProduk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\RelationColumn;

class PesananProdukResource extends Resource
{
    // Model yang digunakan adalah PesananProduk
    protected static ?string $model = PesananKostum ::class;

    // Menambahkan ikon navigasi
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Menambahkan field untuk form
                Forms\Components\TextInput::make('nama_kostum')->label('Nama Kostum')->required(),
                Forms\Components\TextInput::make('ukuran')->label('Ukuran')->required(),
                Forms\Components\TextInput::make('warna')->label('Warna')->required(),
                Forms\Components\TextInput::make('jumlah')->label('Jumlah')->required()->numeric(),
                Forms\Components\DateTimePicker::make('waktu_pemakaian_mulai')->label('Mulai Pemakaian')->required(),
                Forms\Components\DateTimePicker::make('waktu_pemakaian_selesai')->label('Selesai Pemakaian')->required(),
                Forms\Components\FileUpload::make('image')->label('Gambar')->disk('public')->required(),
                Forms\Components\TextInput::make('harga')->label('Harga')->required()->numeric(),
                Forms\Components\Select::make('status_pesanan')->label('Status Pesanan')->options([
                    'pending' => 'Pending',
                    'completed' => 'Completed',
                    'canceled' => 'Canceled',
                ])->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID Pesanan'),

                // Kolom relasi untuk menampilkan data terkait
                // RelationColumn::make('kosta.nama')->label('Nama Kosta'), // Asumsi `PesananProduk` memiliki relasi ke `PesananKostum`
                // RelationColumn::make('user.name')->label('Nama Pengguna'), // Asumsi `PesananProduk` memiliki relasi ke `User`

                TextColumn::make('nama_kostum')->label('Nama Kostum'),
                TextColumn::make('ukuran')->label('Ukuran'),
                TextColumn::make('warna')->label('Warna'),
                TextColumn::make('jumlah')->label('Jumlah'),
                TextColumn::make('waktu_pemakaian_mulai')->label('Mulai Pemakaian')->dateTime(),
                TextColumn::make('waktu_pemakaian_selesai')->label('Selesai Pemakaian')->dateTime(),
                ImageColumn::make('image')->label('Gambar')->disk('public'), // Menampilkan gambar
                TextColumn::make('harga')->label('Harga')->money('IDR'),
                TextColumn::make('status_pesanan')->label('Status Pesanan'),
                TextColumn::make('created_at')->label('Tanggal Pesanan')->dateTime(),
            ])
            ->filters([
                // Anda bisa menambahkan filter di sini jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Jika diperlukan, tambahkan relasi di sini, seperti `PesananKostum`, `PesananMakeup`, `PesananPenyewaanJasaTari`
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPesananProduks::route('/'),
            'create' => Pages\CreatePesananProduk::route('/create'),
            'edit' => Pages\EditPesananProduk::route('/{record}/edit'),
        ];
    }
}