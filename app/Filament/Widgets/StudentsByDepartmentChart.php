<?php

namespace App\Filament\Widgets;

use App\Models\Department;
use Filament\Widgets\ChartWidget;

class StudentsByDepartmentChart extends ChartWidget
{
    protected ?string $heading = 'Students By Department Chart';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $departments = Department::withCount('students')->get();

        return [
            'datasets' => [
                [
                    'label' => 'Students',
                    'data' => $departments->pluck('students_count'),
                    'backgroundColor' => '#3b82f6',
                ],
            ],
            'labels' => $departments->pluck('name'),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
