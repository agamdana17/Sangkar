<?php

namespace App\Livewire;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;


class OrderStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Orders', Order::query()->where('status', 'new')->count()),
            Stat::make('Order Processing', Order::query()->where('status', 'processing')->count()),
            Stat::make('Order Shipped', Order::query()->where('status', 'Shipped')->count()),
            Stat::make('Average Price', Number::currency(Order::query()->avg('grand_total'), 'IDR')),
        ];
    }
}
