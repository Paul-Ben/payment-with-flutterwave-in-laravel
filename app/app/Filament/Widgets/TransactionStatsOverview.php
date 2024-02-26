<?php

namespace App\Filament\Widgets;

use App\Models\Transactions;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TransactionStatsOverview extends BaseWidget
{
    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Registered', Transactions::query()->where('paymentStatus', 'successful')->count()) 
        ];
    }
}
