<?php

namespace App\Filament\Resources\PackagesPageResource\Pages;

use App\Filament\Resources\PackagesPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPackagesPage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PackagesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
