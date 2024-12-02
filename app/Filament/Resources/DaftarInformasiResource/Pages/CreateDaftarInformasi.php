<?php

namespace App\Filament\Resources\DaftarInformasiResource\Pages;

use App\Filament\Resources\DaftarInformasiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDaftarInformasi extends CreateRecord
{
    protected static string $resource = DaftarInformasiResource::class;

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(), // Hanya menyertakan tombol "Create"
            $this->getCancelFormAction(), // Menyertakan tombol "Cancel"
        ];
    }
}
