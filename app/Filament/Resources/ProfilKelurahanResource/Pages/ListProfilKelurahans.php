<?php

namespace App\Filament\Resources\ProfilKelurahanResource\Pages;

use App\Filament\Resources\ProfilKelurahanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfilKelurahans extends ListRecords
{
    protected static string $resource = ProfilKelurahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
