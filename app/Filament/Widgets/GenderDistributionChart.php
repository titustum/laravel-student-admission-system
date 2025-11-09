<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use Filament\Widgets\ChartWidget;

class GenderDistributionChart extends ChartWidget
{
    protected ?string $heading = 'Gender Distribution Chart';


    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $data = Student::selectRaw('gender, COUNT(*) as total')
            ->groupBy('gender')
            ->pluck('total', 'gender');

        return [
            'datasets' => [
                [
                    'data' => $data->values(),
                    'backgroundColor' => ['#60a5fa', '#f472b6', '#a78bfa'],
                ],
            ],
            'labels' => $data->keys(),
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }

    protected function getMaxHeight(): ?string
    {
        return '270px'; // or '20rem', '50vh', etc.
    }
}
