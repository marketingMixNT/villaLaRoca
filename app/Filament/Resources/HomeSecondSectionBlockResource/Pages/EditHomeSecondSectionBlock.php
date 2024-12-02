<?php

namespace App\Filament\Resources\HomeSecondSectionBlockResource\Pages;

use App\Filament\Resources\HomeSecondSectionBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeSecondSectionBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = HomeSecondSectionBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
