<?php

namespace App\Filament\Resources\RegistrationsResource\Pages;

use App\Filament\Resources\RegistrationsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRegistrations extends ViewRecord
{
    protected static string $resource = RegistrationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
