<?php

namespace App\Filament\Resources\ExclusiveHomePageResource\Pages;

use App\Filament\Resources\ExclusiveHomePageResource;
use App\Models\ExclusiveHomePage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExclusiveHomePages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ExclusiveHomePageResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = ExclusiveHomePage::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
