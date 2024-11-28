<?php

namespace App\Filament\Resources\InfoPageBlockResource\Pages;

use App\Filament\Resources\InfoPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInfoPageBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = InfoPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
