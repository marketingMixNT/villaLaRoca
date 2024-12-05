<?php

namespace App\Filament\Resources\PackagesPageResource\Pages;

use App\Filament\Resources\PackagesPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePackagesPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PackagesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
