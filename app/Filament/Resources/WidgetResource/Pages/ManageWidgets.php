<?php

namespace App\Filament\Resources\WidgetResource\Pages;

use App\Filament\Resources\WidgetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWidgets extends ManageRecords
{
    protected static string $resource = WidgetResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
