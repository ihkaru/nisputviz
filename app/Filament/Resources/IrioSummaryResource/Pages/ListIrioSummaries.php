<?php

namespace App\Filament\Resources\IrioSummaryResource\Pages;

use App\Filament\Resources\IrioSummaryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIrioSummaries extends ListRecords
{
    protected static string $resource = IrioSummaryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
