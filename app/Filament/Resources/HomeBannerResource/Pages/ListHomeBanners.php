<?php

namespace App\Filament\Resources\HomeBannerResource\Pages;

use App\Filament\Resources\HomeBannerResource;
use App\Models\HomeBanner;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeBanners extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = HomeBannerResource::class;

    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = HomeBanner::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
    
}
