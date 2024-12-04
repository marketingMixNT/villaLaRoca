<?php

namespace App\Filament\Resources\AboutPageGalleryResource\Pages;

use App\Filament\Resources\AboutPageGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutPageGallery extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = AboutPageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
