<?php

namespace App\Filament\Resources\VoucherPageBlockResource\Pages;

use App\Filament\Resources\VoucherPageBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVoucherPageBlock extends EditRecord
{
    protected static string $resource = VoucherPageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
