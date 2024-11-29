<?php

namespace App\Filament\Resources\AttractionPageResource\Pages;

use App\Filament\Resources\AttractionPageResource;
use App\Models\AttractionPage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAttractionPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = AttractionPageResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = AttractionPage::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
