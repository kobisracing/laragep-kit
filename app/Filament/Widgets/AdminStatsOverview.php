<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Facades\Filament;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminStatsOverview extends StatsOverviewWidget
{
    protected int|string|array $columnSpan = "full";

    protected ?string $pollingInterval = null;

    protected function getStats(): array
    {
        $user = Filament::auth()->user();
        $roleNames = $user?->roles->pluck("name")->implode(", ") ?: "-";

        return [];
    }
}
