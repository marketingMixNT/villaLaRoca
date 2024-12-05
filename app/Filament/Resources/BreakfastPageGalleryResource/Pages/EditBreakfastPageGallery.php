<?php

namespace App\Filament\Resources\BreakfastPageGalleryResource\Pages;

use App\Filament\Resources\BreakfastPageGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBreakfastPageGallery extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = BreakfastPageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
