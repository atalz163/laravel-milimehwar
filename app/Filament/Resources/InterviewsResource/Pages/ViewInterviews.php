<?php

namespace App\Filament\Resources\InterviewsResource\Pages;

use App\Filament\Resources\InterviewsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewInterviews extends ViewRecord
{
    protected static string $resource = InterviewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
