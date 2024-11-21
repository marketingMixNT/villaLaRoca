<?php

namespace App\Filament\Resources\NeighborhoodPageResource\Pages;

use App\Filament\Resources\NeighborhoodPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNeighborhoodPage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = NeighborhoodPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
