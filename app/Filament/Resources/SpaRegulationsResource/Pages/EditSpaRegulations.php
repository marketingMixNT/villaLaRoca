<?php

namespace App\Filament\Resources\SpaRegulationsResource\Pages;

use App\Filament\Resources\SpaRegulationsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpaRegulations extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = SpaRegulationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
