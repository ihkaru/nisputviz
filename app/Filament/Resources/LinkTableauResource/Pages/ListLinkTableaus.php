<?php

namespace App\Filament\Resources\LinkTableauResource\Pages;

use App\Filament\Resources\LinkTableauResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLinkTableaus extends ListRecords
{
    protected static string $resource = LinkTableauResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
