<?php

namespace App\Filament\Resources\KategoriPegawaiResource\Pages;

use App\Filament\Resources\KategoriPegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriPegawai extends EditRecord
{
    protected static string $resource = KategoriPegawaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
