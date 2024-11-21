<?php

namespace App\Filament\Resources\VillaCommonPageResource\Pages;

use App\Filament\Resources\VillaCommonPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVillaCommonPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = VillaCommonPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
