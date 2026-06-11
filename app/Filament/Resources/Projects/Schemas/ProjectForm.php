<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('user_id')
                ->relationship('user', 'name')
                ->required()
                ->searchable()
                ->preload(),
                

            TextInput::make('project_title')
                ->required(),

            TextInput::make('project_type'),

            TextInput::make('client_name'),

            TextInput::make('role'),

            DatePicker::make('start_date'),

            DatePicker::make('end_date'),

            Toggle::make('is_ongoing')
                ->default(false),

            Textarea::make('description')
                ->rows(4),

            TagsInput::make('technologies')
                ->placeholder('Tambah teknologi...'),

            TextInput::make('project_url')
                ->url(),

            TextInput::make('github_url')
                ->url(),

            FileUpload::make('thumbnail')
                ->image()
                ->directory('project')
                ->disk('public') // <-- DIUBAH MENJADI INI
                ->visibility('public'),
        ]);
    }
}