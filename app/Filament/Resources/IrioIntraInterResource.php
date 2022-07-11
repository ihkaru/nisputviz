<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IrioIntraInterResource\Pages;
use App\Filament\Resources\IrioIntraInterResource\RelationManagers;
use App\Models\IrioIntraInter;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IrioIntraInterResource extends Resource
{
    protected static ?string $model = IrioIntraInter::class;

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
                Forms\Components\TextInput::make('output')
                    ->required(),
                Forms\Components\TextInput::make('persentase_permintaan_antara_intraregional')
                    ->required(),
                Forms\Components\TextInput::make('persentase_permintaan_antara_interregional')
                    ->required(),
                Forms\Components\TextInput::make('persentase_permintaan_akhir_intraregional')
                    ->required(),
                Forms\Components\TextInput::make('persentase_permintaan_akhir_interregional')
                    ->required(),
                Forms\Components\TextInput::make('angka_pengganda_output_intraregional')
                    ->required(),
                Forms\Components\TextInput::make('angka_pengganda_output_interreginal')
                    ->required(),
                Forms\Components\TextInput::make('angka_pengganda_pendapatan_intraregional')
                    ->required(),
                Forms\Components\TextInput::make('angka_pengganda_pendapatan_interregional')
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
                Tables\Columns\TextColumn::make('output'),
                Tables\Columns\TextColumn::make('persentase_permintaan_antara_intraregional'),
                Tables\Columns\TextColumn::make('persentase_permintaan_antara_interregional'),
                Tables\Columns\TextColumn::make('persentase_permintaan_akhir_intraregional'),
                Tables\Columns\TextColumn::make('persentase_permintaan_akhir_interregional'),
                Tables\Columns\TextColumn::make('angka_pengganda_output_intraregional'),
                Tables\Columns\TextColumn::make('angka_pengganda_output_interreginal'),
                Tables\Columns\TextColumn::make('angka_pengganda_pendapatan_intraregional'),
                Tables\Columns\TextColumn::make('angka_pengganda_pendapatan_interregional'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListIrioIntraInters::route('/'),
            'create' => Pages\CreateIrioIntraInter::route('/create'),
            'view' => Pages\ViewIrioIntraInter::route('/{record}'),
            'edit' => Pages\EditIrioIntraInter::route('/{record}/edit'),
        ];
    }
}
