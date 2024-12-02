<?php

namespace App\Filament\Resources\KategoriPegawaiResource\Pages;

use App\Filament\Resources\KategoriPegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKategoriPegawai extends CreateRecord
{
    protected static string $resource = KategoriPegawaiResource::class;

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(), // Hanya menyertakan tombol "Create"
            $this->getCancelFormAction(), // Menyertakan tombol "Cancel"
        ];
    }
}
