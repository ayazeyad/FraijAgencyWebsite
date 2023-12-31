<?php

namespace App\Filament\Resources\EmployeeReviewResource\Pages;

use App\Filament\Resources\EmployeeReviewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmployeeReviews extends ListRecords
{
    protected static string $resource = EmployeeReviewResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
