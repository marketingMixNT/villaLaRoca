<?php

namespace App\Filament\Resources\ExclusiveHomePageResource\Pages;

use App\Filament\Resources\ExclusiveHomePageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExclusiveHomePage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ExclusiveHomePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
