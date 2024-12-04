<?php

namespace App\Filament\Resources\AboutPageGalleryResource\Pages;

use Filament\Actions;
use App\Models\AboutPageGallery;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AboutPageGalleryResource;

class ListAboutPageGalleries extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = AboutPageGalleryResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = AboutPageGallery::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
