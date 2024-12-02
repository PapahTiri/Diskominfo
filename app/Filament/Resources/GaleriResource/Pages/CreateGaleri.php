<?php

namespace App\Filament\Resources\GaleriResource\Pages;

use App\Filament\Resources\GaleriResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGaleri extends CreateRecord
{
    protected static string $resource = GaleriResource::class;

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(), // Hanya menyertakan tombol "Create"
            $this->getCancelFormAction(), // Menyertakan tombol "Cancel"
        ];
    }
}
