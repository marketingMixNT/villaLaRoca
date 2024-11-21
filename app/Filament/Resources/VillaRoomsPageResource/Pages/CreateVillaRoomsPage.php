<?php

namespace App\Filament\Resources\VillaRoomsPageResource\Pages;

use App\Filament\Resources\VillaRoomsPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVillaRoomsPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = VillaRoomsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
