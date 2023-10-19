<?php

namespace App\Filament\Resources\OtherActivityResource\Pages;

use App\Filament\Resources\OtherActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOtherActivity extends EditRecord
{
    protected static string $resource = OtherActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
