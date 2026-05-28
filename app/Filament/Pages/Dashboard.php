<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\AdminStatsOverview;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    /**
     * @return array<class-string>
     */
    public function getWidgets(): array
    {
        return [
            AdminStatsOverview::class,
        ];
    }

    public function getColumns(): int | array
    {
        return 1;
    }
}
