<?php

namespace App\Filament\Resources\PesananProdukResource\Pages;

use App\Filament\Resources\PesananProdukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPesananProduks extends ListRecords
{
    protected static string $resource = PesananProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
