<?php

namespace App\Filament\Resources\QuickLinksResource\Pages;

use App\Filament\Resources\QuickLinksResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuickLinks extends EditRecord
{
    protected static string $resource = QuickLinksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
