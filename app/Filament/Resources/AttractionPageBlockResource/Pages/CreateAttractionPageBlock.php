<?php

namespace App\Filament\Resources\AttractionPageBlockResource\Pages;

use App\Filament\Resources\AttractionPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAttractionPageBlock extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = AttractionPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }

    
}
