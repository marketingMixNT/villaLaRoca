<?php

namespace App\Filament\Resources\VoucherPageResource\Pages;

use App\Filament\Resources\VoucherPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVoucherPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = VoucherPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
