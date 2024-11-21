<?php

namespace App\Filament\Resources\VillaCommonPageBlockResource\Pages;

use App\Filament\Resources\VillaCommonPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVillaCommonPageBlock extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = VillaCommonPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
