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

class LinkTableauResource extends Resource
{
    protected static ?string $model = LinkTableau::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('jenis_dashboard')
                    ->options([
                        'Dashboard 1' => 'Dashboard 1',
                        'Dashboard 2' => 'Dashboard 2',
                        'Dashboard 3' => 'Dashboard 3',
                    ])
                    ->unique("link_tableau","jenis_dashboard",null,null,true)
                    ->required(),
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(100),
                Forms\Components\Textarea::make('link')
                    ->rows(15)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('link')->limit(50),
                Tables\Columns\TextColumn::make('jenis_dashboard'),
                Tables\Columns\TextColumn::make('judul'),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListLinkTableaus::route('/'),
            'create' => Pages\CreateLinkTableau::route('/create'),
            'view' => Pages\ViewLinkTableau::route('/{record}'),
            'edit' => Pages\EditLinkTableau::route('/{record}/edit'),
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
