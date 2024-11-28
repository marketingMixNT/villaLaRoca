<?php

namespace App\Filament\Resources\InfoPageBlockResource\Pages;

use App\Filament\Resources\InfoPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInfoPageBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = InfoPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            
            Actions\LocaleSwitcher::make(),
        ];
    }
    
}
