<?php

namespace App\Filament\Resources\AttractionPageResource\Pages;

use App\Filament\Resources\AttractionPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAttractionPage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = AttractionPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
