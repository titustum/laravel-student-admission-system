<?php

namespace App\Filament\Resources\Colleges\Pages;

use App\Filament\Resources\Colleges\CollegeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCollege extends EditRecord
{
    protected static string $resource = CollegeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
