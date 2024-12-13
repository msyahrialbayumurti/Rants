<?php

namespace App\Filament\Resources;

use App\Models\PesananKostum;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use App\Filament\Resources\PesananKostumResource\Pages;

class PesananKostumResource extends Resource
{
    protected static ?string $model = PesananKostum::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack'; // Ikon menu
    protected static ?string $navigationGroup = 'Manajemen Pesanan'; // Grup menu
    protected static ?string $navigationLabel = 'Pesanan Kostum'; // Nama menu

    // Menampilkan tabel data
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('user.name')->label('Nama User')->sortable(),
                TextColumn::make('nama_kostum')->label('Nama Kostum')->sortable(),
                TextColumn::make('ukuran')->label('Ukuran Kostum')->sortable(),
                TextColumn::make('jumlah')->label('Jumlah')->sortable(),
                TextColumn::make('status_pesanan')->label('Status')->sortable(),
                TextColumn::make('harga')->label('Harga')->money('IDR'),
                TextColumn::make('waktu_pemakaian_mulai')->label('Mulai')->dateTime(),
                TextColumn::make('waktu_pemakaian_selesai')->label('Selesai')->dateTime(),
            ])
            ->filters([
                SelectFilter::make('status_pesanan')
                    ->options([
                        'pending' => 'Pending',
                        'diproses' => 'Diproses',
                        'selesai' => 'Selesai',
                        'dibatalkan' => 'Dibatalkan',
                    ])
                    ->label('Status Pesanan'),
            ]);
    }

    // Form untuk input data
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_kostum')->label('Nama Kostum')->required(),
                TextInput::make('ukuran')->label('Ukuran Kostum')->required(),
                TextInput::make('jumlah')->label('Jumlah')->numeric()->required(),
                DatePicker::make('waktu_pemakaian_mulai')->label('Waktu Mulai')->required(),
                DatePicker::make('waktu_pemakaian_selesai')->label('Waktu Selesai')->required(),
                FileUpload::make('image')->label('Gambar Kostum')->image()->required(),
                TextInput::make('harga')->label('Harga')->numeric()->required(),
                Select::make('status_pesanan')
                    ->options([
                        'pending' => 'Pending',
                        'diproses' => 'Diproses',
                        'selesai' => 'Selesai',
                        'dibatalkan' => 'Dibatalkan',
                    ])
                    ->label('Status Pesanan')
                    ->required(),
            ]);
    }

    // Halaman-halaman untuk resource ini
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPesananKosta::route('/'),
            'create' => Pages\CreatePesananKostum::route('/create'),
            'edit' => Pages\EditPesananKostum::route('/{record}/edit'),
        ];
    }
}