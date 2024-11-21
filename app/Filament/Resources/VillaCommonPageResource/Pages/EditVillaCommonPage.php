<?php

namespace App\Filament\Resources\VillaCommonPageResource\Pages;

use App\Filament\Resources\VillaCommonPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVillaCommonPage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = VillaCommonPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
