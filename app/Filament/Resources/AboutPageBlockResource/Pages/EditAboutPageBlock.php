<?php

namespace App\Filament\Resources\AboutPageBlockResource\Pages;

use App\Filament\Resources\AboutPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutPageBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = AboutPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
