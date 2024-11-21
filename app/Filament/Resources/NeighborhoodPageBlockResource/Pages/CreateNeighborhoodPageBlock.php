<?php

namespace App\Filament\Resources\NeighborhoodPageBlockResource\Pages;

use App\Filament\Resources\NeighborhoodPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNeighborhoodPageBlock extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = NeighborhoodPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
