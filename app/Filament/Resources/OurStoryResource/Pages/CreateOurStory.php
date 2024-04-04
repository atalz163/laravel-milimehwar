<?php

namespace App\Filament\Resources\OurStoryResource\Pages;

use App\Filament\Resources\OurStoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOurStory extends CreateRecord
{
    protected static string $resource = OurStoryResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }
}
