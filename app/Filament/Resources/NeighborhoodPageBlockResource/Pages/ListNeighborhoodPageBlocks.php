<?php

namespace App\Filament\Resources\NeighborhoodPageBlockResource\Pages;

use App\Filament\Resources\NeighborhoodPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNeighborhoodPageBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = NeighborhoodPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            
            Actions\LocaleSwitcher::make(),
        ];
    }
}
