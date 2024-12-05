<?php

namespace App\Filament\Resources\PackagesPageBlockResource\Pages;

use App\Filament\Resources\PackagesPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPackagesPageBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PackagesPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
