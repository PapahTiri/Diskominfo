<?php

namespace App\Filament\Resources\KategoriDaftarInformasiResource\Pages;

use App\Filament\Resources\KategoriDaftarInformasiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKategoriDaftarInformasi extends CreateRecord
{
    protected static string $resource = KategoriDaftarInformasiResource::class;

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(), // Hanya menyertakan tombol "Create"
            $this->getCancelFormAction(), // Menyertakan tombol "Cancel"
        ];
    }
}
