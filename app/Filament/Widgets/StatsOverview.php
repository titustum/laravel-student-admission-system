<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use App\Models\Course;
use App\Models\Department;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{

    

    protected function getStats(): array
    {
        return [
            Stat::make('Total Students', Student::count())
                ->description('All registered students')
                ->color('success')
                ->icon('heroicon-o-academic-cap'),

            Stat::make('Courses', Course::count())
                ->description('Available courses')
                ->color('primary')
                ->icon('heroicon-o-book-open'),

            Stat::make('Departments', Department::count())
                ->description('Academic departments')
                ->color('info')
                ->icon('heroicon-o-building-library'),

            Stat::make('Users', User::count())
                ->description('System users (admins/trainers)')
                ->color('warning')
                ->icon('heroicon-o-user-group'),
        ];
    }
}
