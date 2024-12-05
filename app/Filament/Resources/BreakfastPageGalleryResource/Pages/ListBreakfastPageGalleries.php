<?php

namespace App\Filament\Resources\BreakfastPageGalleryResource\Pages;

use Filament\Actions;
use App\Models\BreakfastPageGallery;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\BreakfastPageGalleryResource;

class ListBreakfastPageGalleries extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = BreakfastPageGalleryResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = BreakfastPageGallery::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
