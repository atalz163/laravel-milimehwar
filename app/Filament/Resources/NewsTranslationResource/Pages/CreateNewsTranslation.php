<?php

namespace App\Filament\Resources\NewsTranslationResource\Pages;

use App\Filament\Resources\NewsTranslationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsTranslation extends CreateRecord
{
    protected static string $resource = NewsTranslationResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }
}
