<?php

namespace App\Filament\Resources\TestimonialsPageResource\Pages;

use App\Filament\Resources\TestimonialsPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimonialsPage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = TestimonialsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
