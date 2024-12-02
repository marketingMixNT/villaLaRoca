<?php

namespace App\Filament\Resources\HomeFirstSectionBlockResource\Pages;

use App\Filament\Resources\HomeFirstSectionBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeFirstSectionBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = HomeFirstSectionBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
