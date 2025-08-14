<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput; // Import TextInput
use Filament\Forms\Components\Select; // Import Select component
use Filament\Forms\Components\Toggle; // Import Toggle if you prefer a boolean status


class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Student Name'),
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true) // Ensure email is unique, ignore current record on edit
                    ->label('Email Address'),
                TextInput::make('phone')
                    ->tel() // Sets input type to tel for better mobile experience
                    ->maxLength(255)
                    ->nullable()
                    ->label('Phone Number'),
                Select::make('course_id') // Assuming a course_id foreign key
                    ->relationship('course', 'name') // Assumes a 'course' relationship and 'name' column
                    ->required()
                    ->searchable()
                    ->preload() // Preloads options for better UX on smaller datasets
                    ->label('Course'),
                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                    ])
                    ->required()
                    ->default('pending') // Set a default status for new students
                    ->label('Application Status'),
            ]);
    }
}
