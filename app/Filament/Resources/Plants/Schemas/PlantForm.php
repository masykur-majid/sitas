<?php

namespace App\Filament\Resources\Plants\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PlantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('common_name')
                    ->required(),
                TextInput::make('scientific_name')
                    ->required(),
                TextInput::make('other_common_name')
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'category_name')
                    ->required(),
            ]);
    }
}
