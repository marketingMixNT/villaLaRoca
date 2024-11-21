<?php

namespace App\Filament\Resources\GardenAndSpaPageResource\Pages;

use App\Filament\Resources\GardenAndSpaPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGardenAndSpaPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = GardenAndSpaPageResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
