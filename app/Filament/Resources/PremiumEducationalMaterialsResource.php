<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PremiumEducationalMaterialsResource\Pages;
use App\Filament\Resources\PremiumEducationalMaterialsResource\RelationManagers;
use App\Models\Premium_Educational_Materials;
use App\Models\PremiumEducationalMaterials;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PremiumEducationalMaterialsResource extends Resource
{
    protected static ?string $model = Premium_Educational_Materials::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
    return $form
        ->schema([
            // Left side: Name, Description, Image
            Group::make()->schema([
                Section::make('Material_Details')->schema([
                    TextInput::make('Name')
                        ->required()
                        ->maxLength(255),

                    MarkdownEditor::make('Description')
                        ->columnSpanFull()
                        ->fileAttachmentsDirectory('PremiumEducationalMaterials')
                ])->columns(1),

                Section::make('Images')->schema([
                    FileUpload::make('Image')
                        ->multiple()
                        ->directory('PremiumEducationalMaterials')
                        ->maxFiles(5)
                        ->reorderable()
                ])->columnSpan(1),
            ])->columnSpan(2),

            // Right side: Price, Association, Status
            Group::make()->schema([
                Section::make('Price')->schema([
                    TextInput::make('Price')
                        ->numeric()
                        ->required()
                        ->type('number')
                        ->prefix('$')
                ])->columnSpan(1),

                Section::make('Association')->schema([
                    Select::make('category_id')
                        ->required()
                        ->searchable()
                        ->preload()
                        ->relationship('category', 'Category_Name'),
                ])->columnSpan(1),

                Section::make('Status')->schema([
                    Toggle::make('On_sale')
                        ->required(),
                ])->columnSpan(1),
            ])->columnSpan(1)
        ])->columns(3);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Name')
                    ->searchable(),

                TextColumn::make('category.Category_Name')
                    ->sortable(),


                TextColumn::make('Price')
                    ->money('USD')
                    ->sortable(),

                IconColumn::make('On_sale')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault:true),

                TextColumn::make('Updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault:true),

            ])
            ->filters([
                SelectFilter::make('category')
                    ->relationship('category', 'Category_Name'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),


            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPremiumEducationalMaterials::route('/'),
            'create' => Pages\CreatePremiumEducationalMaterials::route('/create'),
            'edit' => Pages\EditPremiumEducationalMaterials::route('/{record}/edit'),
        ];
    }
}
