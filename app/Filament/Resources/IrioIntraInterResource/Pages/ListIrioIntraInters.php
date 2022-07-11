<?php

namespace App\Filament\Resources\IrioIntraInterResource\Pages;

use App\Filament\Resources\IrioIntraInterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIrioIntraInters extends ListRecords
{
    protected static string $resource = IrioIntraInterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
