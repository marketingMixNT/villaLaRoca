<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttractionPageBlockResource\Pages;
use App\Filament\Resources\AttractionPageBlockResource\RelationManagers;
use App\Models\AttractionPageBlock;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttractionPageBlockResource extends Resource
{
    protected static ?string $model = AttractionPageBlock::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('image')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('text')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('sort')
                    ->numeric()
                    ->default(null),
                Forms\Components\Select::make('attraction_page_id')
                    ->relationship('attractionPage', 'id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('attractionPage.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListAttractionPageBlocks::route('/'),
            'create' => Pages\CreateAttractionPageBlock::route('/create'),
            'edit' => Pages\EditAttractionPageBlock::route('/{record}/edit'),
        ];
    }
}
