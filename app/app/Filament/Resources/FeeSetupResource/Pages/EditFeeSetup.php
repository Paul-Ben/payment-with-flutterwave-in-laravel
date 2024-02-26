<?php

namespace App\Filament\Resources\FeeSetupResource\Pages;

use App\Filament\Resources\FeeSetupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeeSetup extends EditRecord
{
    protected static string $resource = FeeSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
