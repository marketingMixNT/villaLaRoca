<?php

namespace App\Filament\Resources\BreakfastPageBlockResource\Pages;

use App\Filament\Resources\BreakfastPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBreakfastPageBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = BreakfastPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
