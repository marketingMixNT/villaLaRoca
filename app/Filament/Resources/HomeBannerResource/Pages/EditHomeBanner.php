<?php

namespace App\Filament\Resources\HomeBannerResource\Pages;

use App\Filament\Resources\HomeBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeBanner extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = HomeBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
