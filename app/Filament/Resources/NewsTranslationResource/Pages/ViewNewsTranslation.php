<?php

namespace App\Filament\Resources\NewsTranslationResource\Pages;

use App\Filament\Resources\NewsTranslationResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewNewsTranslation extends ViewRecord
{
    protected static string $resource = NewsTranslationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
