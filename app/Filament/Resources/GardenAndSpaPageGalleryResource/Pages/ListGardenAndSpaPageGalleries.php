<?php

namespace App\Filament\Resources\GardenAndSpaPageGalleryResource\Pages;

use App\Filament\Resources\GardenAndSpaPageGalleryResource;
use App\Models\GardenAndSpaPageGallery;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGardenAndSpaPageGalleries extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = GardenAndSpaPageGalleryResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = GardenAndSpaPageGallery::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
