<?php

namespace App\Filament\Resources\BookClubsResource\Pages;

use App\Filament\Resources\BookClubsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBookClubs extends ViewRecord
{
    protected static string $resource = BookClubsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
