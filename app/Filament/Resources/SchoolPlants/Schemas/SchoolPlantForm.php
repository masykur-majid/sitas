<?php

namespace App\Filament\Resources\SchoolPlants\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;

class SchoolPlantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Flex::make([
                    Wizard::make([
                        Step::make('Data Tanaman')
                            ->schema([
                                TextInput::make('plant_number')
                                    ->required(),
                                Select::make('plant_id')
                                    ->relationship('plant', 'common_name')
                                    ->required(),
                                FileUpload::make('image')
                                    ->image()
                                    ->required(),
                            ]),
                        Step::make('Lokasi Tanaman')
                            ->schema([
                                Select::make('location_id')
                                    ->relationship('location', 'location_name')
                                    ->required(),
                                Textarea::make('location_detail')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                        Step::make('Kondisi Tanaman')
                            ->schema([
                                Select::make('condition_id')
                                    ->relationship('condition', 'condition_name')
                                    ->required(),
                                Textarea::make('condition_detail')
                                    ->required()
                                    ->columnSpanFull(),
                            ])
                    ])
                ])
                ->columnSpanFull()
            ]);
    }
}
