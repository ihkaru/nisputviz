<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IrioSummaryResource\Pages;
use App\Filament\Resources\IrioSummaryResource\RelationManagers;
use App\Models\IrioSummary;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IrioSummaryResource extends Resource
{
    protected static ?string $model = IrioSummary::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_provinsi')
                    ->required()
                    ->maxLength(2),
                Forms\Components\TextInput::make('provinsi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_kategori')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('kategori')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('latitude'),
                Forms\Components\TextInput::make('longitude'),
                Forms\Components\TextInput::make('variable')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('value')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_provinsi'),
                Tables\Columns\TextColumn::make('provinsi'),
                Tables\Columns\TextColumn::make('kode_kategori'),
                Tables\Columns\TextColumn::make('kategori'),
                Tables\Columns\TextColumn::make('latitude'),
                Tables\Columns\TextColumn::make('longitude'),
                Tables\Columns\TextColumn::make('variable'),
                Tables\Columns\TextColumn::make('value'),
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
            'index' => Pages\ListIrioSummaries::route('/'),
            'create' => Pages\CreateIrioSummary::route('/create'),
            'view' => Pages\ViewIrioSummary::route('/{record}'),
            'edit' => Pages\EditIrioSummary::route('/{record}/edit'),
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
