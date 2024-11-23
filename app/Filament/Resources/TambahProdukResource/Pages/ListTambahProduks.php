<?php

namespace App\Filament\Resources\TambahProdukResource\Pages;

use App\Filament\Resources\TambahProdukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTambahProduks extends ListRecords
{
    protected static string $resource = TambahProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
