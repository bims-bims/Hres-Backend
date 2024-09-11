<?php

namespace App\Filament\Resources\OfficeUserResource\Pages;

use App\Filament\Resources\OfficeUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOfficeUsers extends ListRecords
{
    protected static string $resource = OfficeUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
