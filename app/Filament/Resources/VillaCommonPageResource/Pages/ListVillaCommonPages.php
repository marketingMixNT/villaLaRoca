<?php

namespace App\Filament\Resources\VillaCommonPageResource\Pages;

use App\Filament\Resources\VillaCommonPageResource;
use App\Models\VillaCommonPage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVillaCommonPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = VillaCommonPageResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = VillaCommonPage::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
