<?php

namespace App\Filament\Resources\HomeSecondSectionBlockResource\Pages;

use App\Filament\Resources\HomeSecondSectionBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeSecondSectionBlock extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = HomeSecondSectionBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
