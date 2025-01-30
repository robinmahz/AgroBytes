<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class CustomerLineChart extends ChartWidget
{
    protected static ?string $heading = 'Crop grown';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Crops Grown in Tons',
                    'data' => [10, 5, 4, 2, 21, 32, 45, 60, 55, 45, 77, 89],
                    'borderColor' => '#53cc31',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
