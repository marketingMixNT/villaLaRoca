<?php

namespace App\Filament\Resources\AttractionPageBlockResource\Pages;

use App\Filament\Resources\AttractionPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAttractionPageBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = AttractionPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
