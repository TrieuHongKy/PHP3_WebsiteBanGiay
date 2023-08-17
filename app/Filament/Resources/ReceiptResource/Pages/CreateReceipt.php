<?php

namespace App\Filament\Resources\ReceiptResource\Pages;

use App\Filament\Resources\ReceiptResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateReceipt extends CreateRecord
{
    protected static string $resource = ReceiptResource::class;
}
