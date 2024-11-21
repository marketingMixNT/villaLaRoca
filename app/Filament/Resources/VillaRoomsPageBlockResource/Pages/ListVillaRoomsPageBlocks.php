<?php

namespace App\Filament\Resources\VillaRoomsPageBlockResource\Pages;

use App\Filament\Resources\VillaRoomsPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVillaRoomsPageBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = VillaRoomsPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            
            Actions\LocaleSwitcher::make(),
        ];
    }
}
