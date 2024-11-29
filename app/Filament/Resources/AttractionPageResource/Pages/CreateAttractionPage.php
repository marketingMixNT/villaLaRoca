<?php

namespace App\Filament\Resources\AttractionPageResource\Pages;

use App\Filament\Resources\AttractionPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAttractionPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = AttractionPageResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
