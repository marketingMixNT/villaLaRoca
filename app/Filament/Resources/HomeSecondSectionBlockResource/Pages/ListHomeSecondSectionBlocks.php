<?php

namespace App\Filament\Resources\HomeSecondSectionBlockResource\Pages;

use App\Filament\Resources\HomeSecondSectionBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeSecondSectionBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = HomeSecondSectionBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),

            Actions\LocaleSwitcher::make(),

        ];
    }
}
