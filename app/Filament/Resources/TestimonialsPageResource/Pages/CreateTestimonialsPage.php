<?php

namespace App\Filament\Resources\TestimonialsPageResource\Pages;

use App\Filament\Resources\TestimonialsPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTestimonialsPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = TestimonialsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
