<?php

namespace App\Filament\Resources\BudgetServiceResource\Pages;

use App\Filament\Resources\BudgetServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBudgetServices extends ListRecords
{
    protected static string $resource = BudgetServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
