<?php

namespace App\Filament\Resources\AboutPageBlockResource\Pages;

use App\Filament\Resources\AboutPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutPageBlock extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = AboutPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
