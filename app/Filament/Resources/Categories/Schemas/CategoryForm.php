<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('slug')
                    ->maxLength(255)
                    ->disabled()
                    ->unique(Category::class, 'slug', ignoredRecord: true)
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->directory('categories')
                    ->columnSpanFull()
                    ->imageEditor()
                    ->imagePreviewHeight('250')
                    ->panelLayout('integrated')
                    ->required(),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
            ]);
    }
}
