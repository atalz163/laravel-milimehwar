<?php

namespace App\Filament\Resources\InterviewsResource\Pages;

use App\Filament\Resources\InterviewsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInterviews extends CreateRecord
{
    protected static string $resource = InterviewsResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }
}
