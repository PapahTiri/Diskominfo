<?php

namespace App\Filament\Resources\MonografiKelurahanResource\Pages;

use App\Filament\Resources\MonografiKelurahanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMonografiKelurahan extends EditRecord
{
    protected static string $resource = MonografiKelurahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
