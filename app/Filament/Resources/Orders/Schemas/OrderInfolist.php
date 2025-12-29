<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Tables\Columns\TextColumn;
use Filament\Schemas\Schema;

class OrderInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user.name')
                    ->label('Customer'),
                TextEntry::make('grand_total')
                    ->numeric(),
                TextEntry::make('payment_method'),
                TextEntry::make('payment_status'),
                TextEntry::make('status'),
                TextEntry::make('currency'),
                TextEntry::make('shipping_amount')
                    ->numeric(),
                TextEntry::make('shipping_method'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
