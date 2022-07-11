<?php

namespace App\Filament\Resources\IrioIntraInterResource\Pages;

use App\Filament\Resources\IrioIntraInterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIrioIntraInter extends EditRecord
{
    protected static string $resource = IrioIntraInterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
