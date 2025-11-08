<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class MonthlyAdmissionsChart extends ChartWidget
{
    protected ?string $heading = 'Monthly Admissions Chart';

    protected static ?int $sort = 4;

    protected string $color = 'info';

    protected function getData(): array
    {
        $admissions = Student::select(
            DB::raw("strftime('%m', admission_date) as month"),
            DB::raw('COUNT(*) as total')
        )
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');

        return [
            'datasets' => [
                [
                    'label' => 'Admissions',
                    'data' => $admissions->values(),
                    'borderColor' => '#10b981',
                    'fill' => false,
                    'tension' => 0.3,
                ],
            ],
            'labels' => $admissions->keys()->map(fn ($m) => date('F', mktime(0, 0, 0, (int) $m, 1))),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
