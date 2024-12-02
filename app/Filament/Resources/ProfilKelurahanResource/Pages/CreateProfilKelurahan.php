<?php

namespace App\Filament\Resources\ProfilKelurahanResource\Pages;

use App\Filament\Resources\ProfilKelurahanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProfilKelurahan extends CreateRecord
{
    protected static string $resource = ProfilKelurahanResource::class;

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(), // Hanya menyertakan tombol "Create"
            $this->getCancelFormAction(), // Menyertakan tombol "Cancel"
        ];
    }
}
