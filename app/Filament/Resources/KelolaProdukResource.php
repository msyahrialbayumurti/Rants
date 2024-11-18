<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KelolaProdukResource\Pages;
use App\Filament\Resources\KelolaProdukResource\RelationManagers;
use App\Models\KelolaProduk;
use App\Models\MakeUp;
use App\Models\Kostum;
use App\Models\PenyewaanJasaTari;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KelolaProdukResource extends Resource
{
    protected static ?string $model = KelolaProduk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Form untuk input/edit data
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('image')
                    ->label('Image')
                    ->required(),
                Forms\Components\TextInput::make('harga')
                    ->label('Harga')
                    ->required(),
                Forms\Components\Select::make('produk_tipe')
                    ->label('Tipe Produk')
                    ->options([
                        'makeup' => 'Makeup',
                        'kostum' => 'Kostum',
                        'jasa_tari' => 'Jasa Tari',
                    ])
                    ->required(),
            ]);
    }

    // Tabel untuk menampilkan data
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->size(50),
                Tables\Columns\TextColumn::make('harga')
                    ->label('Harga')
                    ->sortable(),
                Tables\Columns\TextColumn::make('produk_tipe')
                    ->label('Tipe Produk'),
            ])
            ->filters([
                // Filter berdasarkan tipe produk (makeup, kostum, atau jasa tari)
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
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    // // Relasi yang akan ditampilkan berdasarkan tipe produk
    // public static function getRelations(): array
    // {
    //     return [
    //         // Tampilkan relasi sesuai dengan tipe produk
    //         RelationManagers\PesananMakeUpRelationManager::class, // Relasi pesanan makeup
    //         RelationManagers\PesananKostumRelationManager::class, // Relasi pesanan kostum
    //         RelationManagers\PesananTarianRelationManager::class, // Relasi pesanan jasa tari
    //     ];
    // }

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