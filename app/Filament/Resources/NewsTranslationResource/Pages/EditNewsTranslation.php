<?php

namespace App\Filament\Resources\NewsTranslationResource\Pages;

use App\Filament\Resources\NewsTranslationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsTranslation extends EditRecord
{
    protected static string $resource = NewsTranslationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
