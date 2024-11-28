<?php

namespace App\Filament\Resources\SpaRegulationsResource\Pages;

use App\Filament\Resources\SpaRegulationsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSpaRegulations extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = SpaRegulationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
