<?php

namespace App\Filament\Resources\GardenAndSpaPageResource\Pages;

use App\Filament\Resources\GardenAndSpaPageResource;
use App\Models\GardenAndSpaPage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGardenAndSpaPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = GardenAndSpaPageResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = GardenAndSpaPage::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
