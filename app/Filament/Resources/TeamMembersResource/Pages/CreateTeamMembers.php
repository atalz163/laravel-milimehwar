<?php

namespace App\Filament\Resources\TeamMembersResource\Pages;

use App\Filament\Resources\TeamMembersResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTeamMembers extends CreateRecord
{
    protected static string $resource = TeamMembersResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }
}
