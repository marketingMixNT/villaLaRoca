<?php

namespace App\Filament\Resources\NeighborhoodPageResource\Pages;

use App\Filament\Resources\NeighborhoodPageResource;
use App\Models\NeighborhoodPage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNeighborhoodPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = NeighborhoodPageResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = NeighborhoodPage::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
