<?php

namespace App\Filament\Resources\KelolaProdukResource\Pages;

use App\Filament\Resources\KelolaProdukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelolaProduk extends EditRecord
{
    protected static string $resource = KelolaProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
