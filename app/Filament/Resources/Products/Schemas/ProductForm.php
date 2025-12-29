<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Product;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make()->schema([
                    // Product Information
                    Section::make('Product Information')
                        ->schema([
                            TextInput::make('name')
                                ->maxLength(255)
                                ->required()
                                ->live()
                                ->afterStateUpdated(function ($state, callable $set, $context) {
                                    if ($context === 'create') {
                                        $set('slug', Str::slug($state));
                                    }
                                }),

                            TextInput::make('slug')
                                ->maxLength(255)
                                ->disabled()
                                ->dehydrated()  // tetap dikirim ke database
                                ->unique(Product::class, 'slug', ignoreRecord: true)
                                ->required(),

                            MarkdownEditor::make('description')
                                ->columnSpanFull()
                                ->fileAttachmentsDirectory('products')
                        ])
                        ->columns(2),
                    // Upload Image
                    Section::make('Image')
                        ->schema([
                            FileUpload::make('image')
                                ->image()
                                ->multiple()
                                ->directory('products')
                                ->maxFiles(5)
                                ->reorderable()
                        ])
                ])->columnSpan(2),

                Group::make()
                    ->schema([
                        Section::make('Price')
                            ->schema([
                                TextInput::make('price')
                                    ->required()
                                    ->numeric()
                                    ->prefix('IDR')
                            ]),
                        Section::make('Associations')
                            ->schema([
                                Select::make('category_id')
                                    ->required()
                                    ->searchable()
                                    ->preload()
                                    ->relationship('category', 'name'),
                                Select::make('brand_id')
                                    ->required()
                                    ->searchable()
                                    ->preload()
                                    ->relationship('brand', 'name')
                            ]),
                        Section::make('Status')
                            ->schema([
                                Toggle::make('is_active')
                                    ->required()
                                    ->default(true),
                                Toggle::make('in_stock')
                                    ->required()
                                    ->default(true),
                                Toggle::make('is_featured')
                                    ->required(),
                                Toggle::make('on_sale')
                                    ->required()
                            ]),
                    ])
                    ->columnSpan(1)
            ])
            ->columns(3);
    }
}
