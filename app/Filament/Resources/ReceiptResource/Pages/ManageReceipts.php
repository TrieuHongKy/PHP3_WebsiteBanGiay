<?php

namespace App\Filament\Resources\ReceiptResource\Pages;

use App\Filament\Resources\ReceiptResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageReceipts extends ManageRecords
{
    protected static string $resource = ReceiptResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}