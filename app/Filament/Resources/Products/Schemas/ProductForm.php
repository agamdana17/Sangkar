<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([ 
                
                    TextInput::make('category_id')
                        ->required()
                        ->numeric(),
                    TextInput::make('brand_id')
                        ->required()
                        ->numeric(),
                    TextInput::make('name')
                        ->maxLength(255)
                        ->required(),
                    TextInput::make('slug')
                        ->maxLength(255)
                        ->disabled()
                        ->required(),
                    FileUpload::make('image')
                        ->image(),
                    TextInput::make('price')
                        ->required()
                        ->numeric()
                        ->prefix('$'),
                    MarkdownEditor::make('description')
                        ->required()
                        ->fileAttachmentsDirectory('products')
                        ->columnSpanFull(),
                    Toggle::make('is_active')
                        ->required(),
                    Toggle::make('is_featured')
                        ->required(),
                    Toggle::make('in_stock')
                        ->required(),
                    Toggle::make('on_sale')
                        ->required(),
            ]);
    }
}
