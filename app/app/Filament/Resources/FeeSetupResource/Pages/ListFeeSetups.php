<?php

namespace App\Filament\Resources\FeeSetupResource\Pages;

use App\Filament\Resources\FeeSetupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeeSetups extends ListRecords
{
    protected static string $resource = FeeSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
