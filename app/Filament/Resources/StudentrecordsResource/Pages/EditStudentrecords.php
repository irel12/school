<?php

namespace App\Filament\Resources\StudentrecordsResource\Pages;

use App\Filament\Resources\StudentrecordsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudentrecords extends EditRecord
{
    protected static string $resource = StudentrecordsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
