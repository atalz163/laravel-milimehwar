<?php

namespace App\Filament\Resources\TeamMembersResource\Pages;

use App\Filament\Resources\TeamMembersResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTeamMembers extends ViewRecord
{
    protected static string $resource = TeamMembersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
