<?php

namespace App\Filament\Resources\NeighborhoodPageBlockResource\Pages;

use App\Filament\Resources\NeighborhoodPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNeighborhoodPageBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = NeighborhoodPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
