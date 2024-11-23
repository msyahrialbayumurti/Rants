<?php

namespace App\Filament\Resources\TambahProdukResource\Pages;

use App\Filament\Resources\TambahProdukResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTambahProduk extends CreateRecord
{
    protected static string $resource = TambahProdukResource::class;

    protected function getRedirectUrl(): string
    {
        return TambahProdukResource::getUrl('index');
    }
}