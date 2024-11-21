<?php

namespace App\Filament\Resources\VillaRoomsPageBlockResource\Pages;

use App\Filament\Resources\VillaRoomsPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVillaRoomsPageBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = VillaRoomsPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
