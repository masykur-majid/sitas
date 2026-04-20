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
                    ->label('Nama Umum')
                    ->required(),
                TextInput::make('scientific_name')
                    ->label('Nama Ilmiah')
                    ->required(),
                TextInput::make('english_name')
                    ->label('Nama dalam Bahasa Inggris')
                    ->required()
                    ->default('-'),
                Select::make('category_id')
                    ->label('Kategori')
                    ->relationship('category', 'category_name')
                    ->required(),
            ]);
    }
}
