<?php

namespace App\Filament\Resources\GardenAndSpaPageGalleryResource\Pages;

use App\Filament\Resources\GardenAndSpaPageGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGardenAndSpaPageGallery extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = GardenAndSpaPageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
