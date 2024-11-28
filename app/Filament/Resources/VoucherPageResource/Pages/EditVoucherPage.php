<?php

namespace App\Filament\Resources\VoucherPageResource\Pages;

use App\Filament\Resources\VoucherPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVoucherPage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = VoucherPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
