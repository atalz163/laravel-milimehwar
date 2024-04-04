<?php

namespace App\Filament\Resources\StatementsResource\Pages;

use App\Filament\Resources\StatementsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStatements extends ViewRecord
{
    protected static string $resource = StatementsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
