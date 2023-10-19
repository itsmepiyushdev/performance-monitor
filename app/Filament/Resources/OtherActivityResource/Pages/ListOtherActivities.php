<?php

namespace App\Filament\Resources\OtherActivityResource\Pages;

use App\Filament\Resources\OtherActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOtherActivities extends ListRecords
{
    protected static string $resource = OtherActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
