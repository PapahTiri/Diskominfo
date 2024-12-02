<?php

namespace App\Filament\Resources\KategoriLayananResource\Pages;

use App\Filament\Resources\KategoriLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKategoriLayanan extends CreateRecord
{
    protected static string $resource = KategoriLayananResource::class;

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(), // Hanya menyertakan tombol "Create"
            $this->getCancelFormAction(), // Menyertakan tombol "Cancel"
        ];
    }
}
