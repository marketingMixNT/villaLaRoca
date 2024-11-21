<?php

namespace App\Filament\Resources\VillaRoomsPageBlockResource\Pages;

use App\Filament\Resources\VillaRoomsPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVillaRoomsPageBlock extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = VillaRoomsPageBlockResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
