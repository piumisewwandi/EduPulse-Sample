<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DigitalDeliveryAddressRelationManager extends RelationManager
{
    protected static string $relationship = 'Digital_Delivery_Address';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('First_Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('Last_Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('Email')
                    ->required()
                    ->email()
                    ->maxLength(255),

                TextInput::make('Phone_Number')
                    ->required()
                    ->tel()
                    ->maxLength(255),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Digital_Delivery_Address')
            ->columns([
               TextColumn::make('Full Name')
                    ->label('Full Name'),
                TextColumn::make('Email'),
                TextColumn::make('Phone Number'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
