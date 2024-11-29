<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TambahProdukResource\Pages;
use App\Models\Produk;
use Filament\Forms;
use Filament\Forms\Form as FormsForm;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class TambahProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-plus-circle';

    protected static ?string $navigationLabel = 'Tambah Jasa';

    public static function form(FormsForm $form): FormsForm
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_produk')
                    ->label('Nama Produk')
                    ->required(),
                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_produk')
                    ->label('Nama Produk')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50) // Membatasi jumlah karakter yang ditampilkan
                    ->wrap(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTambahProduks::route('/'),
            'create' => Pages\CreateTambahProduk::route('/create'),
        ];
    }
}