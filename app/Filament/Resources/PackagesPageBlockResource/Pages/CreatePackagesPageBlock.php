<?php

namespace App\Filament\Resources\PackagesPageBlockResource\Pages;

use App\Filament\Resources\PackagesPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePackagesPageBlock extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PackagesPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
