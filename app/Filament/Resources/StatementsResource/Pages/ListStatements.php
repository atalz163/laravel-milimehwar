<?php

namespace App\Filament\Resources\StatementsResource\Pages;

use App\Filament\Resources\StatementsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatements extends ListRecords
{
    protected static string $resource = StatementsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
