<?php

namespace App\Filament\Resources\VillaRoomsPageResource\Pages;

use App\Filament\Resources\VillaRoomsPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVillaRoomsPage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = VillaRoomsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
