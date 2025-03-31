<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Faker\Core\Number;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Orders', Order::query()->where('status', 'new')->count()),
            Stat::make('Pending Orders', Order::query()->where('status', 'pending')->count()),
            Stat::make('Completed Orders', Order::query()->where('status', 'completed')->count()),
            //Stat::make('Average Price', Number::currency(Order::query()->avg('Final_Total'))),
        ];
    }
}
