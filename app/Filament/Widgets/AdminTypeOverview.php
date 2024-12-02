<?php

namespace App\Filament\Widgets;

use App\Models\Berita;
use App\Models\Pegawai;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::query()->count()),
            Stat::make('Berita', Berita::query()->count()),
            Stat::make('Pegawai', Pegawai::query()->count()),
        ];
    }
}
