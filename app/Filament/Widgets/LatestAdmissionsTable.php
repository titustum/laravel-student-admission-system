<?php

namespace App\Filament\Widgets;

use Filament\Actions\BulkActionGroup; 
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Student;
use App\Models\Department;
use App\Models\Course;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;

class LatestAdmissionsTable extends TableWidget
{
    protected static ?int $sort = 5;

    protected function getTableQuery(): Builder
    {
        // Shows latest 20 admissions by default
        return Student::latest('admission_date')->take(20);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('admission_number')
                ->label('Admission #')
                ->sortable()
                ->searchable(),

            ImageColumn::make('photo')
                ->label('Photo')
                ->circular(),

            TextColumn::make('first_name')
                ->label('First Name')
                ->sortable()
                ->searchable(), 

            TextColumn::make('last_name')
                ->label('Last Name')
                ->sortable()
                ->searchable(),

            TextColumn::make('gender')
                ->colors([
                    'primary' => 'male',
                    'warning' => 'female',
                    'secondary' => 'other',
                ]),

            TextColumn::make('department.name')
                ->label('Department')
                ->sortable()
                ->searchable(),

            TextColumn::make('course.name')
                ->label('Course')
                ->sortable()
                ->searchable(),

            TextColumn::make('admission_date')
                ->label('Admission Date')
                ->date()
                ->sortable(),
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            SelectFilter::make('department_id')
                ->label('Department')
                ->relationship('department', 'name'),

            SelectFilter::make('course_id')
                ->label('Course')
                ->relationship('course', 'name'),

            SelectFilter::make('gender')
                ->options([
                    'male' => 'Male',
                    'female' => 'Female',
                    'other' => 'Other',
                ]),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            ViewAction::make(),
            EditAction::make(),
        ];
    }

    protected function getTableHeaderActions(): array
    {
        return [
            // Add actions like 'Add New Student' if needed
        ];
    }

    protected function getTableBulkActions(): array
    {
        return [
            BulkActionGroup::make([
                // e.g., bulk delete, bulk export
            ]),
        ];
    }
}
