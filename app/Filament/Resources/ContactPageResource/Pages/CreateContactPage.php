<?php

namespace App\Filament\Resources\ContactPageResource\Pages;

use App\Filament\Resources\ContactPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContactPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ContactPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
