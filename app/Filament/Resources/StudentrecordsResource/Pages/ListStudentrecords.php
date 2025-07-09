<?php

namespace App\Filament\Resources\StudentrecordsResource\Pages;

use App\Filament\Resources\StudentrecordsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudentrecords extends ListRecords
{
    protected static string $resource = StudentrecordsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
