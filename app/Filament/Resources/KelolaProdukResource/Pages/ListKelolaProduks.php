<?php

namespace App\Filament\Resources\KelolaProdukResource\Pages;

use App\Filament\Resources\KelolaProdukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKelolaProduks extends ListRecords
{
    protected static string $resource = KelolaProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
