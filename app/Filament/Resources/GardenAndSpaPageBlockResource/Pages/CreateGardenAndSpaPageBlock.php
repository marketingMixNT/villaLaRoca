<?php

namespace App\Filament\Resources\GardenAndSpaPageBlockResource\Pages;

use App\Filament\Resources\GardenAndSpaPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGardenAndSpaPageBlock extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = GardenAndSpaPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
