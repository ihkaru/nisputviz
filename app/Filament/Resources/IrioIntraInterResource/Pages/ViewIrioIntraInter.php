<?php

namespace App\Filament\Resources\IrioIntraInterResource\Pages;

use App\Filament\Resources\IrioIntraInterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIrioIntraInter extends ViewRecord
{
    protected static string $resource = IrioIntraInterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
