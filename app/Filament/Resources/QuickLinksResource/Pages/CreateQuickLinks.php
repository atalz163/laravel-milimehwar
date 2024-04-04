<?php

namespace App\Filament\Resources\QuickLinksResource\Pages;

use App\Filament\Resources\QuickLinksResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateQuickLinks extends CreateRecord
{
    protected static string $resource = QuickLinksResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }
}
