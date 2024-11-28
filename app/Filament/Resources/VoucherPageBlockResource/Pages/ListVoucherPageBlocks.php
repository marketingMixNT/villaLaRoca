<?php

namespace App\Filament\Resources\VoucherPageBlockResource\Pages;

use App\Filament\Resources\VoucherPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVoucherPageBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = VoucherPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
          
            Actions\LocaleSwitcher::make(),
        ];
    }
}
