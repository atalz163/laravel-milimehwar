<?php

namespace App\Filament\Resources\OnlineRegisterationResource\Pages;

use App\Filament\Resources\OnlineRegisterationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOnlineRegisteration extends EditRecord
{
    protected static string $resource = OnlineRegisterationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
