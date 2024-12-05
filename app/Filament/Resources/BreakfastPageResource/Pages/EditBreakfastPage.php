<?php

namespace App\Filament\Resources\BreakfastPageResource\Pages;

use App\Filament\Resources\BreakfastPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBreakfastPage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = BreakfastPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
