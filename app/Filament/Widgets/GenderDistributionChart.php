<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class GenderDistributionChart extends ChartWidget
{
    protected ?string $heading = 'Gender Distribution Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
