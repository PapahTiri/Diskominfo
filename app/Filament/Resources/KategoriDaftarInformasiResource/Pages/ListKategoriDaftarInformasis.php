<?php

namespace App\Filament\Resources\KategoriDaftarInformasiResource\Pages;

use App\Filament\Resources\KategoriDaftarInformasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriDaftarInformasis extends ListRecords
{
    protected static string $resource = KategoriDaftarInformasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
