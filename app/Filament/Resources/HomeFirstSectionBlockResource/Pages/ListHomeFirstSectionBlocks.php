<?php

namespace App\Filament\Resources\HomeFirstSectionBlockResource\Pages;

use App\Filament\Resources\HomeFirstSectionBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeFirstSectionBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = HomeFirstSectionBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),

            Actions\LocaleSwitcher::make(),

        ];
    }
}
