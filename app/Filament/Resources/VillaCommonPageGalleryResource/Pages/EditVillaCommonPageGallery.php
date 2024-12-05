<?php

namespace App\Filament\Resources\VillaCommonPageGalleryResource\Pages;

use App\Filament\Resources\VillaCommonPageGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVillaCommonPageGallery extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = VillaCommonPageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
