<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn; // Import TextColumn
use Filament\Tables\Filters\SelectFilter; // Import SelectFilter
use Filament\Support\Colors\Color; // Import Color class for badge colors

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('phone'),
                TextColumn::make('course.name')->label('Course'),
                TextColumn::make('status')
                    ->badge() // Display as a badge
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'approved',
                    ])
                    ->sortable(),
                TextColumn::make('created_at')->label('Applied At')->dateTime()->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                    ])
                    ->label('Application Status'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->bulkActions([ // Use bulkActions instead of toolbarActions for clarity
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
