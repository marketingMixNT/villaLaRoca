<?php

namespace App\Filament\Resources\BreakfastPageGalleryResource\Pages;

use App\Filament\Resources\BreakfastPageGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBreakfastPageGallery extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = BreakfastPageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
