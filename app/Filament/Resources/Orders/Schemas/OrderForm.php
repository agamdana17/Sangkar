<?php

namespace App\Filament\Resources\Orders\Schemas;

use App\Models\Product;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Number;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make()->schema([
                    Section::make('Order Information')
                        ->schema([
                            Select::make('user_id')
                                ->label('Customer')
                                ->relationship('user', 'name')
                                ->searchable()
                                ->preload()
                                ->required(),
                            Select::make('payment_method')
                                ->options([
                                    'stripe' => 'Stripe',
                                    'cod' => 'Cash On Delivery',
                                ])
                                ->required(),
                            Select::make('payment_status')
                                ->options([
                                    'pending' => 'Pending',
                                    'paid' => 'Paid',
                                    'failed' => 'Failed',
                                ])
                                ->default('pending')
                                ->required(),
                            ToggleButtons::make('status')
                                ->inline()
                                ->default('new')
                                ->required()
                                ->options([
                                    'new' => 'New',
                                    'processing' => 'Processing',
                                    'shipped' => 'Shipped',
                                    'delivered' => 'Delivered',
                                    'canceled' => 'Canceled',
                                ])
                                ->colors([
                                    'new' => 'info',
                                    'processing' => 'warning',
                                    'shipped' => 'info',
                                    'delivered' => 'success',
                                    'canceled' => 'danger',
                                ])
                                ->icons([
                                    'new' => 'heroicon-m-sparkles',
                                    'processing' => 'heroicon-m-arrow-path',
                                    'shipped' => 'heroicon-m-truck',
                                    'delivered' => 'heroicon-m-check-badge',
                                    'canceled' => 'heroicon-m-x-circle',
                                ]),
                            Select::make('currency')
                                ->options([
                                    'idr' => 'IDR',
                                    'usd' => 'USD',
                                ])
                                ->default('idr')
                                ->required(),
                            Select::make('shipping_method')
                                ->options([
                                    'ninja-xpress' => 'Ninja Xpress',
                                    'spx' => 'SPX',
                                    'jnt' => 'J&T Express',
                                    'jne' => 'JNE',
                                ])
                                ->default('spx')
                                ->required(),
                            Textarea::make('notes')
                                ->columnSpanFull(),
                        ])
                        ->columns(2),
                    Section::make('Order Items')
                        ->schema([
                            Repeater::make('items')
                                ->relationship()
                                ->schema([
                                    Select::make('product_id')
                                        ->relationship('product', 'name')
                                        ->searchable()
                                        ->preload()
                                        ->required()
                                        ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                                        ->reactive()
                                        ->afterStateUpdated(
                                            fn($state, Set $set) =>
                                                $set('unit_amount', Product::find($state)?->price ?? 0)
                                        )
                                        ->columnSpan(4),
                                    TextInput::make('quantity')
                                        ->numeric()
                                        ->default(1)
                                        ->minValue(1)
                                        ->reactive()
                                        ->afterStateUpdated(
                                            fn($state, Set $set, callable $get) =>
                                                $set('total_amount', $state * ($get('unit_amount') ?? 0))
                                        )
                                        ->columnSpan(2),
                                    TextInput::make('unit_amount')
                                        ->numeric()
                                        ->disabled()
                                        ->columnSpan(3),
                                    TextInput::make('total_amount')
                                        ->numeric()
                                        ->columnSpan(3),
                                ])
                                ->columns(12),
                            Placeholder::make('grand_total_placeholder')
                                ->label('Grand Total')
                                ->content(function (Get $get, Set $set) {
                                    $total = 0;
                                    if(!$repeaters = $get('items')) {
                                        return $total;
                                    }

                                    foreach ($repeaters as $key => $repeater) {
                                        $total += $get("items.{$key}.total_amount");
                                    }
                                    $set('grand_total', $total);
                                    return Number::currency($total, "IDR");

                                }),

                            Hidden::make('grand_total')
                                ->default(0),
                        ]),
                ])->columnSpanFull(),
            ]);
    }
}
