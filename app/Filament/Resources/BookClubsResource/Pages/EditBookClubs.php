<?php

namespace App\Filament\Resources\BookClubsResource\Pages;

use App\Filament\Resources\BookClubsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBookClubs extends EditRecord
{
    protected static string $resource = BookClubsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
