<?php

namespace App\Filament\Resources\DaftarInformasiResource\Pages;

use App\Filament\Resources\DaftarInformasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDaftarInformasi extends EditRecord
{
    protected static string $resource = DaftarInformasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
