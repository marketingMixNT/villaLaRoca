<?php

namespace App\Filament\Resources\VillaCommonPageBlockResource\Pages;

use App\Filament\Resources\VillaCommonPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVillaCommonPageBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = VillaCommonPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
