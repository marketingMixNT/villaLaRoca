<?php

namespace App\Filament\Resources\TestimonialsPageResource\Pages;

use App\Filament\Resources\TestimonialsPageResource;
use App\Models\TestimonialsPage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimonialsPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = TestimonialsPageResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = TestimonialsPage::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
