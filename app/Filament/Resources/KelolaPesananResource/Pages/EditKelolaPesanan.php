<?php

namespace App\Filament\Resources\KelolaPesananResource\Pages;

use App\Filament\Resources\KelolaPesananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelolaPesanan extends EditRecord
{
    protected static string $resource = KelolaPesananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
