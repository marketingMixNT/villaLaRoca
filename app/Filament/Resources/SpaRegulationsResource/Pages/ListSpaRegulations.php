<?php

namespace App\Filament\Resources\SpaRegulationsResource\Pages;

use App\Filament\Resources\SpaRegulationsResource;
use App\Models\SpaRegulations;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpaRegulations extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = SpaRegulationsResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = SpaRegulations::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
