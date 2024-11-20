<?php

namespace App\Filament\Resources\KelolaPesananResource\Pages;

use App\Filament\Resources\KelolaPesananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKelolaPesanans extends ListRecords
{
    protected static string $resource = KelolaPesananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
