<?php

namespace App\Filament\Resources\SchoolPlants\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SchoolPlantInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('plant_number'),
                TextEntry::make('plant.id')
                    ->label('Plant'),
                ImageEntry::make('image'),
                TextEntry::make('location.id')
                    ->label('Location'),
                TextEntry::make('location_detail')
                    ->columnSpanFull(),
                TextEntry::make('condition.id')
                    ->label('Condition'),
                TextEntry::make('condition_detail')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
