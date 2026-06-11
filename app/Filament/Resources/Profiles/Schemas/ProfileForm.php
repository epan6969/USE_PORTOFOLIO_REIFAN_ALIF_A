<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('user_id')
                ->relationship('user', 'name')
                ->required()
                ->searchable()
                ->preload(),

            TextInput::make('username')
                ->required()
                ->unique(ignoreRecord: true),

            FileUpload::make('photo_profile')
                ->image()
                ->directory('profiles')
                ->disk('public') // <-- DIUBAH MENJADI INI
                ->visibility('public'),

            Textarea::make('short_bio')
                ->rows(3),

            Textarea::make('professional_vision')
                ->rows(3),

            Textarea::make('mission')
                ->rows(3),

            TextInput::make('location'),

            DatePicker::make('date_of_birth'),
        ]);
    }
}
