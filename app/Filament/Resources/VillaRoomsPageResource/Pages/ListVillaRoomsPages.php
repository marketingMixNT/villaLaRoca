<?php

namespace App\Filament\Resources\VillaRoomsPageResource\Pages;

use App\Filament\Resources\VillaRoomsPageResource;
use App\Models\VillaRoomsPage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVillaRoomsPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = VillaRoomsPageResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = VillaRoomsPage::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
