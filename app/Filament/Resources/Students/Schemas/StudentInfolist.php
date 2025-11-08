<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class StudentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('admission_number'),
                TextEntry::make('first_name'),
                TextEntry::make('last_name'),
                TextEntry::make('photo'),
                TextEntry::make('gender'),
                TextEntry::make('date_of_birth')
                    ->date(),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('phone'),
                TextEntry::make('alternative_phone'),
                TextEntry::make('parent_name'),
                TextEntry::make('parent_phone'),
                TextEntry::make('department.name')
                    ->numeric(),
                TextEntry::make('course.name')
                    ->numeric(),
                TextEntry::make('admission_date')
                    ->date(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
