<?php

namespace App\Filament\Resources\BudgetServiceResource\Pages;

use App\Filament\Resources\BudgetServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBudgetService extends CreateRecord
{
    protected static string $resource = BudgetServiceResource::class;

        protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
        
    }

}
