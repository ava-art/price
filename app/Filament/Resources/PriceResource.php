<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PriceResource\Pages;
use App\Filament\Resources\PriceResource\RelationManagers;
use App\Models\Price;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PriceResource extends Resource
{
    protected static ?string $model = Price::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                Tables\Columns\TextColumn::make('groupp')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                Tables\Columns\TextColumn::make('subgroup')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('brand')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('price')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('onsklad')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('inway')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    Tables\Columns\TextColumn::make('rrc')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('volume')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                    Tables\Columns\TextColumn::make('shtrihcode')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                    Tables\Columns\TextColumn::make('description')
                    ->sortable()
                    ->limit(50)
                    ->searchable(),
                    Tables\Columns\TextColumn::make('akcia')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrices::route('/'),
            // 'create' => Pages\CreatePrice::route('/create'),
            // 'view' => Pages\ViewPrice::route('/{record}'),
            // 'edit' => Pages\EditPrice::route('/{record}/edit'),
        ];
    }
}
