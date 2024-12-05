<?php

namespace App\Filament\Resources\BreakfastPageResource\Pages;

use Filament\Actions;
use App\Models\BreakfastPage;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\BreakfastPageResource;

class ListBreakfastPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = BreakfastPageResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = BreakfastPage::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
