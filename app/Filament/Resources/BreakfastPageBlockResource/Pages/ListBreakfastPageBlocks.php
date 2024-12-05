<?php

namespace App\Filament\Resources\BreakfastPageBlockResource\Pages;

use App\Filament\Resources\BreakfastPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBreakfastPageBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = BreakfastPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
