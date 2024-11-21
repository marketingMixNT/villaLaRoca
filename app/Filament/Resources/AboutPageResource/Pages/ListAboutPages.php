<?php

namespace App\Filament\Resources\AboutPageResource\Pages;

use Filament\Actions;
use App\Models\AboutPage;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AboutPageResource;

class ListAboutPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = AboutPageResource::class;

   
    protected function getHeaderActions(): array
    {

        $pageExists = AboutPage::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
