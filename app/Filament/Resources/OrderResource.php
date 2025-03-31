<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Filament\Resources\OrderResource\RelationManagers\DigitalDeliveryAddressRelationManager;
use App\Models\Digital_Delivery_Address;
use App\Models\Order;
use App\Models\Order_Materials;
use App\Models\Premium_Educational_Materials;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextColumn\TextColumnSize;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Order Details')->schema([
                        Select::make('user_id')
                            ->label('User')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                    Select::make('Payment_Method')
                        ->options([
                            'Credit Card' => 'Credit Card',
                            'Debit Card' => 'Debit Card',
                            'Bank Transfer' => 'Bank Transfer',
                        ])
                        ->required(),

                    Select::make('Payment_Status')
                        ->options([
                            'Pending' => 'Pending',
                            'Paid' => 'Paid',
                            'Failed' => 'Failed',
                        ])
                        ->required()
                        ->default('Pending'),

                    ToggleButtons::make('Status')
                            ->inline()
                            ->required()
                            ->default('processing')
                        ->options([
                            'processing' => 'processing',
                            'completed' => 'completed',
                            'decline' => 'decline',
                        ])
                        ->colors([
                            'processing' => 'warning',
                            'completed' => 'success',
                            'decline' => 'danger',
                        ])
                        ->icons([
                            'processing' => 'heroicon-m-arrow-path',
                            'completed' => 'heroicon-m-check-badge',
                            'decline' => 'heroicon-o-x-circle',
                    ]),
                    Select::make('Currency')
                        ->options([
                            'USD' => 'USD',
                            'EUR' => 'EUR',
                            'LKR' => 'LKR',
                            'AUD' => 'AUD',
                        ])
                        ->required()
                        ->default('USD'),


                    ])->columns(2),
                ])->columnSpanFull(),


                    Section::make('Order Materials')->schema([
                        Repeater::make('order_materials')
                            ->relationship()
                            ->schema(([
                                Select::make('premium__educational__materials_id')
                                    ->relationship('premium__educational__materials', 'Name')
                                    ->searchable()
                                    ->preload()
                                    ->required()
                                    ->distinct()
                                    ->reactive()
                                    ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                                    ->afterStateUpdated(fn ($state, Set $set) => $set('Price', Premium_Educational_Materials::find($state)?->price ?? 0))
                                    ->columnSpan(4),


                                 TextInput::make('Price')
                                    ->numeric()
                                    ->required()
                                    ->disabled()
                                    ->dehydrated()
                                    ->columnSpan(3),
                            ]))->columns(12),

                            Hidden::make('Final_Total')
                                ->default(0),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('User')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('Final_Total')
                    ->sortable()
                    ->money('USD'),
                TextColumn::make('Payment_Method')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('Payment_Status')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('Currency')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('Status')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault:true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault:true),



            ])
            ->filters([
                //
            ])
            ->actions([

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([

                ]),
            ]);
    }

    public static function getRelations(): array{
        return[
            DigitalDeliveryAddressRelationManager::class,

        ];
    }


    public static function getNavigationBadge(): ?string {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null{
        return static::getModel()::count() > 0 ? 'success' : 'danger';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'view' => Pages\ViewOrder::route('/{record}'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
