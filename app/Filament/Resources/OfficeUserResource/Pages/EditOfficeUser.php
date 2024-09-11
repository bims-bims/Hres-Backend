<?php

namespace App\Filament\Resources\OfficeUserResource\Pages;

use App\Filament\Resources\OfficeUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOfficeUser extends EditRecord
{
    protected static string $resource = OfficeUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
