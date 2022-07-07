<?php

namespace App\Filament\Resources\IrioSummaryResource\Pages;

use App\Filament\Resources\IrioSummaryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIrioSummary extends EditRecord
{
    protected static string $resource = IrioSummaryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
