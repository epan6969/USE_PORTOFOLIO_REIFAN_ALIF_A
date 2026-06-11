<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->disk('public'),

                Tables\Columns\TextColumn::make('user.name')
                    ->label('User')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Project Title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('project_type')
                    ->label('Type')
                    ->searchable(),

                Tables\Columns\TextColumn::make('client_name')
                    ->label('Client')
                    ->searchable(),

                Tables\Columns\TextColumn::make('role')
                    ->searchable(),

                Tables\Columns\TextColumn::make('start_date')
                    ->date(),

                Tables\Columns\TextColumn::make('end_date')
                    ->date(),

                Tables\Columns\IconColumn::make('is_ongoing')
                    ->label('Ongoing')
                    ->boolean(),

                Tables\Columns\TextColumn::make('technologies')
                    ->limit(30),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}