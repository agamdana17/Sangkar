<?php

namespace App\Filament\Resources\Brands\Schemas;

use App\Models\Brand;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class BrandForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
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
                    ->unique(Brand::class, 'slug', ignoreRecord: true)
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->directory('Brand')
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
