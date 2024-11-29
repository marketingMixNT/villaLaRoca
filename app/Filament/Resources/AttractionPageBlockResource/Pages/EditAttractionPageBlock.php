<?php

namespace App\Filament\Resources\AttractionPageBlockResource\Pages;

use App\Filament\Resources\AttractionPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAttractionPageBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = AttractionPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
