<?php

namespace App\Filament\Resources\BreakfastPageResource\Pages;

use App\Filament\Resources\BreakfastPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBreakfastPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = BreakfastPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
