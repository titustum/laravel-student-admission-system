<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class MonthlyAdmissionsChart extends ChartWidget
{
    protected ?string $heading = 'Monthly Admissions Chart';

    protected static ?int $sort = 4;

    // protected int | string | array $columnSpan = 'full'; // This line makes the widget span full width

    // Optional: default color
    protected string $color = 'warning';

    protected function getData(): array
    {
        // Generate monthly trend data for students admitted this year
        $data = Trend::model(Student::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Admissions',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'borderColor' => 'orange', // custom line color
                    'backgroundColor' => '#d1fae5', // optional for points/fill
                    'fill' => false,
                    'tension' => 0.3,
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date), // "Jan", "Feb", ...
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
