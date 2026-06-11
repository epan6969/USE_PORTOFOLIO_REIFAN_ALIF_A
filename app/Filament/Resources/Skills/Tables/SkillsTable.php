<?php

namespace App\Filament\Resources\Skills\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables;
use Filament\Tables\Table;

class SkillsTable
{
    public static function configure(Table $table): Table
    {
        return $table
          ->columns([
                // Mengubah user_id menjadi nama user pembawa skill (jika relasi sudah diset)
                // Atau bisa dihapus dari tabel karena user hanya melihat data miliknya sendiri
                Tables\Columns\TextColumn::make('skill_name')
                    ->label('Nama Skill')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('proficiency_level')
                    ->label('Kemahiran')
                    ->suffix('%')
                    ->sortable(),

                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Frontend' => 'info',
                        'Backend' => 'success',
                        'DevOps' => 'danger',
                        'Design' => 'warning',
                        default => 'gray',
                    })
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diubah Pada')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([])
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