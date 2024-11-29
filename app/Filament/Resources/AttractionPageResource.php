<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttractionPageResource\Pages;
use App\Filament\Resources\AttractionPageResource\RelationManagers;
use App\Models\AttractionPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttractionPageResource extends Resource
{
    protected static ?string $model = AttractionPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('meta_title')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('meta_desc')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('header_heading')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('banner')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('heading')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('text')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
            'index' => Pages\ListAttractionPages::route('/'),
            'create' => Pages\CreateAttractionPage::route('/create'),
            'edit' => Pages\EditAttractionPage::route('/{record}/edit'),
        ];
    }
}
