<?php

namespace App\Filament\Resources\SchoolPlants\Pages;

use App\Filament\Resources\SchoolPlants\SchoolPlantResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSchoolPlant extends ViewRecord
{
    protected static string $resource = SchoolPlantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
