<?php

namespace App\Filament\Resources\IrioSummaryResource\Pages;

use App\Filament\Resources\IrioSummaryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIrioSummary extends ViewRecord
{
    protected static string $resource = IrioSummaryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
