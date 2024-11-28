<?php

namespace App\Filament\Resources\InfoPageResource\Pages;

use Filament\Actions;
use App\Models\InfoPage;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\InfoPageResource;

class ListInfoPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = InfoPageResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = InfoPage::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
