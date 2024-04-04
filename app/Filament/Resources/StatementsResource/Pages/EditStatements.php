<?php

namespace App\Filament\Resources\StatementsResource\Pages;

use App\Filament\Resources\StatementsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatements extends EditRecord
{
    protected static string $resource = StatementsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
