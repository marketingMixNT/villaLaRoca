<?php

namespace App\Filament\Resources\NeighborhoodPageResource\Pages;

use App\Filament\Resources\NeighborhoodPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNeighborhoodPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = NeighborhoodPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
