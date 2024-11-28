<?php

namespace App\Filament\Resources\InfoPageBlockResource\Pages;

use App\Filament\Resources\InfoPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInfoPageBlock extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = InfoPageBlockResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
