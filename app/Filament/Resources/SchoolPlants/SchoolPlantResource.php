<?php

namespace App\Filament\Resources\SchoolPlants;

use App\Filament\Resources\SchoolPlants\Pages\CreateSchoolPlant;
use App\Filament\Resources\SchoolPlants\Pages\EditSchoolPlant;
use App\Filament\Resources\SchoolPlants\Pages\ListSchoolPlants;
use App\Filament\Resources\SchoolPlants\Pages\ViewSchoolPlant;
use App\Filament\Resources\SchoolPlants\Schemas\SchoolPlantForm;
use App\Filament\Resources\SchoolPlants\Schemas\SchoolPlantInfolist;
use App\Filament\Resources\SchoolPlants\Tables\SchoolPlantsTable;
use App\Models\SchoolPlant;
use BackedEnum;
use UnitEnum;
use Daljo25\FilamentTablerIcons\Enums\TablerIcon;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SchoolPlantResource extends Resource
{
    protected static ?string $model = SchoolPlant::class;

    protected static string|UnitEnum|null $navigationGroup = 'Manage Plants Data';

    protected static string|BackedEnum|null $navigationIcon = TablerIcon::Plant2;
    protected static string|BackedEnum|null $activeNavigationIcon = TablerIcon::Plant2;
    public static function form(Schema $schema): Schema
    {
        return SchoolPlantForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SchoolPlantInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SchoolPlantsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSchoolPlants::route('/'),
            'create' => CreateSchoolPlant::route('/create'),
            'view' => ViewSchoolPlant::route('/{record}'),
            'edit' => EditSchoolPlant::route('/{record}/edit'),
        ];
    }
}
