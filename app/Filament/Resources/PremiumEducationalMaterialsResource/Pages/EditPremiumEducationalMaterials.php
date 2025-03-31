<?php

namespace App\Filament\Resources\PremiumEducationalMaterialsResource\Pages;

use App\Filament\Resources\PremiumEducationalMaterialsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPremiumEducationalMaterials extends EditRecord
{
    protected static string $resource = PremiumEducationalMaterialsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
