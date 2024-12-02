<?php

namespace App\Filament\Resources\KategoriBeritaResource\Pages;

use App\Filament\Resources\KategoriBeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKategoriBerita extends CreateRecord
{
    protected static string $resource = KategoriBeritaResource::class;

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(), // Hanya menyertakan tombol "Create"
            $this->getCancelFormAction(), // Menyertakan tombol "Cancel"
        ];
    }
}
