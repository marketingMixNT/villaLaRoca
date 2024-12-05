<?php

namespace App\Filament\Resources\VillaCommonPageGalleryResource\Pages;

use Filament\Actions;
use App\Models\VillaCommonPageGallery;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\VillaCommonPageGalleryResource;
use App\Filament\Resources\VillaCommonPageBlockResource\Pages\ListVillaCommonPageBlocks;

class ListVillaCommonPageGalleries extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = VillaCommonPageGalleryResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = VillaCommonPageGallery::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
