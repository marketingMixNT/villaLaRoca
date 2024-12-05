<?php

namespace App\Filament\Resources\VillaCommonPageGalleryResource\Pages;

use App\Filament\Resources\VillaCommonPageGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVillaCommonPageGallery extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = VillaCommonPageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
