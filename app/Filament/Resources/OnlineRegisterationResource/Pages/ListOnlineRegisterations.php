<?php

namespace App\Filament\Resources\OnlineRegisterationResource\Pages;

use App\Filament\Resources\OnlineRegisterationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOnlineRegisterations extends ListRecords
{
    protected static string $resource = OnlineRegisterationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
