<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('user_id')
                ->relationship('user', 'name')
                ->required()
                ->searchable()
                ->preload(),

            TextInput::make('position_title')
                ->required(),

            TextInput::make('organization_name')
                ->required(),

            DatePicker::make('start_date')
                ->required(),

            DatePicker::make('end_date'),

            Toggle::make('is_current')
                ->default(false),

            Textarea::make('description')
                ->rows(4),
        ]);
    }
}