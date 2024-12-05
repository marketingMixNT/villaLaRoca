<?php

namespace App\Filament\Resources\ExclusiveHomePageBlockResource\Pages;

use App\Filament\Resources\ExclusiveHomePageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExclusiveHomePageBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ExclusiveHomePageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
