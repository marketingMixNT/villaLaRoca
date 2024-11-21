<?php

namespace App\Filament\Resources\ContactPageResource\Pages;

use App\Filament\Resources\ContactPageResource;
use App\Models\ContactPage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ContactPageResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = ContactPage::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
