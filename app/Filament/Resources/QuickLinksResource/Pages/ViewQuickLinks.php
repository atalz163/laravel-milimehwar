<?php

namespace App\Filament\Resources\QuickLinksResource\Pages;

use App\Filament\Resources\QuickLinksResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewQuickLinks extends ViewRecord
{
    protected static string $resource = QuickLinksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
