<?php

namespace App\Filament\Resources\SchoolPlants\Pages;

use App\Filament\Resources\SchoolPlants\SchoolPlantResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSchoolPlant extends EditRecord
{
    protected static string $resource = SchoolPlantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
