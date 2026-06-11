<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('user_id')
                ->relationship('user', 'name')
                ->required()
                ->searchable()
                ->preload(),

            TextInput::make('skill_name')
                ->required(),

            Select::make('proficiency_level')
                ->options([
                    'beginner'     => 'Beginner',
                    'intermediate' => 'Intermediate',
                    'advanced'     => 'Advanced',
                    'expert'       => 'Expert',
                ])
                ->required(),

          FileUpload::make('skill')
                ->image()
                ->directory('profiles')
                ->disk('public') // <-- DIUBAH MENJADI INI
                ->visibility('public'),

            TextInput::make('category'),
        ]);
    }
}