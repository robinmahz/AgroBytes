<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Users', '2000')
            -> description('New Users that have joined')
            -> descriptionIcon('heroicon-o-user')
            -> chart([2,4,5,6,7,12,14,16])
            ->color('success'),
            Stat::make('Crops trend', '3 Tons')
            -> description('Crops grown in the past month')
            -> descriptionIcon('heroicon-o-arrow-trending-down')
            -> chart([30,20,10,9,8,7])
            ->color('danger'),
            Stat::make('Revenue', '$8000')
            -> description('Money earned this month')
            -> descriptionIcon('heroicon-o-arrow-trending-up')
            -> chart([0,40,60,90,80,80])
            ->color('success'),
        ];
    }
}
