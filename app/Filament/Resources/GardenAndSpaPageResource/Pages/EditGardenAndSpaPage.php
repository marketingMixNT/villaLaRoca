<?php

namespace App\Filament\Resources\GardenAndSpaPageResource\Pages;

use App\Filament\Resources\GardenAndSpaPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGardenAndSpaPage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = GardenAndSpaPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
