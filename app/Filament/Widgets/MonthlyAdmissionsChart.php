<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class MonthlyAdmissionsChart extends ChartWidget
{
    protected ?string $heading = 'Monthly Admissions Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
