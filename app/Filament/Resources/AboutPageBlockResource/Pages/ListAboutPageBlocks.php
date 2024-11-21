<?php

namespace App\Filament\Resources\AboutPageBlockResource\Pages;

use App\Filament\Resources\AboutPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutPageBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = AboutPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            
            Actions\LocaleSwitcher::make(),
        ];
    }
}
