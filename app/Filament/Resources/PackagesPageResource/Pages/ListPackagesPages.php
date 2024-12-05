<?php

namespace App\Filament\Resources\PackagesPageResource\Pages;

use App\Filament\Resources\PackagesPageResource;
use App\Models\PackagesPage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPackagesPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PackagesPageResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = PackagesPage::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
