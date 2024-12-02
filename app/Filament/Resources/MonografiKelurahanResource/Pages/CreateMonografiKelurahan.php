<?php

namespace App\Filament\Resources\MonografiKelurahanResource\Pages;

use App\Filament\Resources\MonografiKelurahanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMonografiKelurahan extends CreateRecord
{
    protected static string $resource = MonografiKelurahanResource::class;

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(), // Hanya menyertakan tombol "Create"
            $this->getCancelFormAction(), // Menyertakan tombol "Cancel"
        ];
    }
}
