<?php

namespace App\Filament\Resources\AboutPageGalleryResource\Pages;

use App\Filament\Resources\AboutPageGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutPageGallery extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = AboutPageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
