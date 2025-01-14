<?php

namespace App\Filament\Resources\RegulasiResource\Pages;

use App\Filament\Resources\RegulasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegulasis extends ListRecords
{
    protected static string $resource = RegulasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
