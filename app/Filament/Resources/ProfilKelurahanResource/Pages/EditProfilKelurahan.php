<?php

namespace App\Filament\Resources\ProfilKelurahanResource\Pages;

use App\Filament\Resources\ProfilKelurahanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfilKelurahan extends EditRecord
{
    protected static string $resource = ProfilKelurahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
