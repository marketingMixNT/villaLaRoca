<?php

namespace App\Filament\Resources\GardenAndSpaPageBlockResource\Pages;

use App\Filament\Resources\GardenAndSpaPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGardenAndSpaPageBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = GardenAndSpaPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
