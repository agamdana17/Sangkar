<?php

namespace App\Filament\Widgets;

use Filament\Actions\BulkActionGroup;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\Orders\OrderResource;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\Action;
use Filament\Tables\Actions;
use order;

class LatestOrders extends TableWidget
{

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort =2;

    public function table(Table $table): Table
    {
        return $table
            ->query(OrderResource::getEloquentQuery())
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('id')
                    ->label('Order ID')
                    ->searchable(),
                TextColumn::make('user.name'),    
                TextColumn::make('grand_total')
                    ->money('IDR'),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'new' => 'info',
                        'processing' => 'warning',
                        'shipped' => 'success',
                        'delivered' => 'success',
                        'canceled' => 'danger',
                    })
                    ->icon(fn(string $state): string => match ($state) {
                        'new' => 'heroicon-m-sparkles',
                        'processing' => 'heroicon-m-arrow-path',
                        'shipped' => 'heroicon-m-truck',
                        'delivered' => 'heroicon-m-check-badge',
                        'canceled' => 'heroicon-x-circle',
                    })
                    ->sortable(),
                TextColumn::make('payment_method')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('payment_status')
                    ->badge()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Order Date')
                    ->dateTime(),
            ])
            ->actions([
                Action::make('view')
                    ->label('View Order')
                    ->icon('heroicon-m-eye')
                    ->color('info')
                    ->url(fn($record) =>
                        OrderResource::getUrl('view', ['record' => $record])),
            ]);
    }
}
