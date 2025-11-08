<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class StudentsByDepartmentChart extends ChartWidget
{
    protected ?string $heading = 'Students By Department Chart';

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
