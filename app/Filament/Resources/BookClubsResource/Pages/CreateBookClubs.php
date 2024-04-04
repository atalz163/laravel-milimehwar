<?php

namespace App\Filament\Resources\BookClubsResource\Pages;

use App\Filament\Resources\BookClubsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBookClubs extends CreateRecord
{
    protected static string $resource = BookClubsResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }
}
