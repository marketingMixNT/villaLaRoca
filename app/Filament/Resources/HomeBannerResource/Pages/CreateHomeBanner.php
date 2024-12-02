<?php

namespace App\Filament\Resources\HomeBannerResource\Pages;

use App\Filament\Resources\HomeBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeBanner extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;


    protected static string $resource = HomeBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
