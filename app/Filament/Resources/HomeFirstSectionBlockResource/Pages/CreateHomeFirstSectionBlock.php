<?php

namespace App\Filament\Resources\HomeFirstSectionBlockResource\Pages;

use App\Filament\Resources\HomeFirstSectionBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeFirstSectionBlock extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = HomeFirstSectionBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
