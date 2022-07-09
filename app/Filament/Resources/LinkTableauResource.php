<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LinkTableauResource\Pages;
use App\Filament\Resources\LinkTableauResource\RelationManagers;
use App\Models\LinkTableau;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Tables\Filters\SelectFilter;

class LinkTableauResource extends Resource
{
    protected static ?string $model = LinkTableau::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('link')
                    ->required()
                    ->rows(15),
                Select::make('jenis_dashboard')
                    ->options([
                        'Dahsboard 1' => 'Dashboard 1',
                        'Dahsboard 2' => 'Dashboard 2',
                        'Dahsboard 3' => 'Dashboard 3',
                    ])
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('link')->limit(50),
                TextColumn::make('jenis_dashboard'),
                TextColumn::make('created_at')->sortable(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->filters([
                SelectFilter::make('jenis_dashboard')
                    ->options([
                        'Dahsboard 1' => 'Dashboard 1',
                        'Dahsboard 2' => 'Dashboard 2',
                        'Dahsboard 3' => 'Dashboard 3',
                    ])
            ])
            ->bulkActions([
                Tables\Actions\ForceDeleteBulkAction::make(),
            ])->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLinkTableaus::route('/'),
            'create' => Pages\CreateLinkTableau::route('/create'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
