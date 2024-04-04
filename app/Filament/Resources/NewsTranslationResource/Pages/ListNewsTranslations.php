<?php

namespace App\Filament\Resources\NewsTranslationResource\Pages;

use App\Filament\Resources\NewsTranslationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsTranslations extends ListRecords
{
    protected static string $resource = NewsTranslationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
