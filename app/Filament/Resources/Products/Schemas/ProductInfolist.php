<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('category.name')
                ->label('Category'),
                TextEntry::make('Brand.name')
                ->label('Brand'),
                TextEntry::make('name'),
                TextEntry::make('slug'),
                TextEntry::make('price')
                    ->money(),
                IconEntry::make('is_active')
                    ->boolean(),
                IconEntry::make('is_featured')
                    ->boolean(),
                IconEntry::make('in_stock')
                    ->boolean(),
                IconEntry::make('on_sale')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
