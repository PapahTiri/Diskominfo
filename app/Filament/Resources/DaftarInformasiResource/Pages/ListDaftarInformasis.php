<?php

namespace App\Filament\Resources\DaftarInformasiResource\Pages;

use App\Filament\Resources\DaftarInformasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDaftarInformasis extends ListRecords
{
    protected static string $resource = DaftarInformasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
