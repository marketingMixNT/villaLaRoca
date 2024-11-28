<?php

namespace App\Filament\Resources\VoucherPageResource\Pages;

use App\Filament\Resources\VoucherPageResource;
use App\Models\VoucherPage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVoucherPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = VoucherPageResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = VoucherPage::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
