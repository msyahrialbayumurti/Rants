<?php

namespace App\Filament\Resources\TambahProdukResource\Pages;

use App\Filament\Resources\TambahProdukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTambahProduk extends EditRecord
{
    protected static string $resource = TambahProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
