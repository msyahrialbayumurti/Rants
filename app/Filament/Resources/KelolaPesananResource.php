<?php

namespace App\Filament\Resources;

use App\Models\Pesanan;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\KelolaPesananResource\Pages\ManagePesanan;

class KelolaPesananResource extends Resource
{
protected static ?string $model = Pesanan::class; // Menggunakan model Pesanan

protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
protected static ?string $navigationGroup = 'Manajemen Pesanan';

public static function table(Tables\Table $table): Tables\Table
{
return $table
->columns([
Tables\Columns\TextColumn::make('id')->label('ID'),
Tables\Columns\TextColumn::make('pesananable_type')->label('Jenis Pesanan'),
Tables\Columns\TextColumn::make('status_pesanan')->label('Status Pesanan'),
Tables\Columns\TextColumn::make('harga')->label('Harga'),
Tables\Columns\TextColumn::make('tanggal_pesanan')->label('Tanggal Pesanan'),
])
->filters([
SelectFilter::make('jenis_pesanan')
->options([
'kostum' => 'Kostum',
'makeup' => 'Makeup',
'tarian' => 'Tarian',
])
->label('Jenis Pesanan'),
]);
}

public static function form(Forms\Form $form): Forms\Form
{
return $form
->schema([
// Pilihan jenis pesanan
Select::make('jenis_pesanan')
->options([
'kostum' => 'Kostum',
'makeup' => 'Makeup',
'tarian' => 'Tarian',
])
->label('Jenis Pesanan')
->required(),

// Field umum untuk semua jenis pesanan
TextInput::make('harga')->label('Harga')->numeric()->required(),
Select::make('status_pesanan')
->options([
'pending' => 'Pending',
'completed' => 'Completed',
'cancelled' => 'Cancelled',
])
->label('Status Pesanan')->required(),
DatePicker::make('tanggal_pesanan')->label('Tanggal Pesanan')->required(),

// Field dinamis berdasarkan jenis pesanan
// Kostum
Forms\Components\Group::make([
TextInput::make('ukuran')->label('Ukuran')->nullable(),
TextInput::make('warna')->label('Warna')->nullable(),
TextInput::make('jumlah')->label('Jumlah')->nullable(),
FileUpload::make('image')->label('Gambar Kostum')->nullable(),
])->hidden(fn ($get) => $get('jenis_pesanan') !== 'kostum'),

// Makeup
Forms\Components\Group::make([
TextInput::make('lokasi_pemesanan')->label('Lokasi Pemesanan')->nullable(),
])->hidden(fn ($get) => $get('jenis_pesanan') !== 'makeup'),

// Tarian
Forms\Components\Group::make([
TextInput::make('jumlah_penari')->label('Jumlah Penari')->nullable(),
TextInput::make('jenis_tarian')->label('Jenis Tarian')->nullable(),
])->hidden(fn ($get) => $get('jenis_pesanan') !== 'tarian'),
]);
}

// Halaman pengelolaan pesanan
public static function getPages(): array
{
return [
'index' => ManagePesanan::route('/'),
];
}
}