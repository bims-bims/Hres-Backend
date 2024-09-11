<?php

namespace App\Filament\Resources\OfficeUserResource\Pages;

use App\Filament\Resources\OfficeUserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOfficeUser extends CreateRecord
{
    protected static string $resource = OfficeUserResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
        
    }
}
