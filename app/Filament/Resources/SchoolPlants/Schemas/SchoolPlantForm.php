<?php

namespace App\Filament\Resources\SchoolPlants\Schemas;

use App\Models\SchoolPlant;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SchoolPlantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Satu Tanaman')
                    ->description('Masukan Informasi umum tentang tanaman')
                    ->schema([
                        TextInput::make('plant_number')
                            ->label('Nomor Tanaman')
                            ->default(SchoolPlant::generateNextNumber())
                            ->disabled()
                            ->dehydrated()
                            ->required(),
                        Select::make('plant_id')
                            ->label('Nama Umum Tanaman')
                            ->relationship('plant', 'common_name')
                            ->required(),
                    ]),
                Section::make('Lokasi Tanaman')
                    ->description('Masukan informasi tentang lokasi dari tanaman yang ada di Sekolah')
                    ->schema([
                        Select::make('location_id')
                            ->label('Lokasi Tanaman')
                            ->relationship('location', 'location_name')
                            ->required(),
                        Textarea::make('location_detail')
                            ->label('informasi detail lokasi tanaman')
                            ->helperText('masukan informasi tentang lokasi spesifik dari tanaman yang sedang di data, seperti posisi tanaman, tersimpan di wadah apa dll.')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Kondisi Tanaman')
                    ->description('Masukan informasi tentang kondisi dari tanaman yang ada di Sekolah')
                    ->schema([
                        Select::make('condition_id')
                            ->relationship('condition', 'condition_name')
                            ->required(),
                        Textarea::make('condition_detail')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Foto Tanaman')
                    ->description('Upload kondisi foto tanaman terbaru')
                    ->schema([
                        FileUpload::make('image')
                            ->hiddenLabel()
                            ->image()
                            ->required(),
                    ]),
            ]);
    }
}
