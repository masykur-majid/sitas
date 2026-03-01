<?php

namespace App\Filament\Resources\SchoolPlants\Pages;

use App\Filament\Resources\SchoolPlants\SchoolPlantResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSchoolPlants extends ListRecords
{
    protected static string $resource = SchoolPlantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
