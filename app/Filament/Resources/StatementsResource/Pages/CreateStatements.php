<?php

namespace App\Filament\Resources\StatementsResource\Pages;

use App\Filament\Resources\StatementsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStatements extends CreateRecord
{
    protected static string $resource = StatementsResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }
}
