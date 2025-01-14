<?php

namespace App\Filament\Resources\RegulasiResource\Pages;

use App\Filament\Resources\RegulasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegulasi extends EditRecord
{
    protected static string $resource = RegulasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
