<?php

namespace App\Filament\Resources\KategoriPegawaiResource\Pages;

use App\Filament\Resources\KategoriPegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriPegawais extends ListRecords
{
    protected static string $resource = KategoriPegawaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
