<?php

namespace App\Filament\Resources\Conditions;

use App\Filament\Imports\ConditionImporter;
use App\Filament\Resources\Conditions\Pages\ManageConditions;
use App\Models\Condition;
use BackedEnum;
use Filament\Actions\ImportAction;
use UnitEnum;
use Daljo25\FilamentTablerIcons\Enums\TablerIcon;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Resources\Pages\ListRecords;

class ConditionResource extends Resource
{
    protected static ?string $model = Condition::class;
    protected $listeners = ['refreshTable' => '$refresh'];
    protected static string|BackedEnum|null $navigationIcon = TablerIcon::DeviceHeartMonitor;
    protected static string|UnitEnum|null $navigationGroup = 'Manage Plants Data';
    protected static string|BackedEnum|null $activeNavigationIcon = TablerIcon::DeviceHeartMonitorFilled;
    protected function getHeaderActions(): array
    {
        return [
            ImportAction::make()
                ->importer(ConditionImporter::class)
                // This triggers the refresh after import completes
                ->after(fn ($livewire) => $livewire->dispatch('refresh'))
        ];
    }
    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('condition_name')
                    ->required()
                    ->unique(),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('condition_name'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('condition_name')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->poll('3s');
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageConditions::route('/'),
        ];
    }
}
