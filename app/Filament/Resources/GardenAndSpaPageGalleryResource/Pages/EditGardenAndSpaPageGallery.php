<?php

namespace App\Filament\Resources\GardenAndSpaPageGalleryResource\Pages;

use App\Filament\Resources\GardenAndSpaPageGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGardenAndSpaPageGallery extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = GardenAndSpaPageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
