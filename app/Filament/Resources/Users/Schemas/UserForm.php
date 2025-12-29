<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\CreateRecord;

class UserForm
{
    protected static ?string $recordTitleAttribute = 'name';
    
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->maxlength(255)
                    ->required(),

                DateTimePicker::make('email_verified_at')
                    ->default(now()),
                
                TextInput::make('password')
                    ->password()
                    ->dehydrated(fn($state) => filled($state))
                    ->required(fn ($livewire): bool => $livewire instanceof CreateRecord)
            ]);
    }
}
