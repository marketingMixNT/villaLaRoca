<?php

namespace App\Filament\Resources\ExclusiveHomePageBlockResource\Pages;

use App\Filament\Resources\ExclusiveHomePageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExclusiveHomePageBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ExclusiveHomePageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
