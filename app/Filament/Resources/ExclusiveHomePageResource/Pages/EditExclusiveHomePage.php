<?php

namespace App\Filament\Resources\ExclusiveHomePageResource\Pages;

use App\Filament\Resources\ExclusiveHomePageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExclusiveHomePage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ExclusiveHomePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
