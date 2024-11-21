<?php

namespace App\Filament\Resources\GardenAndSpaPageBlockResource\Pages;

use App\Filament\Resources\GardenAndSpaPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGardenAndSpaPageBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = GardenAndSpaPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            
            Actions\LocaleSwitcher::make(),
        ];
    }
}
