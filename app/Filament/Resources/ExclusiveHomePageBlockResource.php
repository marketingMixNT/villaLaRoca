<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use App\Models\ExclusiveHomePageBlock;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Filament\Resources\ExclusiveHomePageBlockResource\Pages;
use App\Filament\Resources\ExclusiveHomePageBlockResource\RelationManagers;
use Filament\Forms\Components\Select;

class ExclusiveHomePageBlockResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = ExclusiveHomePageBlock::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Oferty';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            FileUpload::make('image')
            ->label('Obraz')
            ->directory('pageExclusieHome')
            ->getUploadedFileNameForStorageUsing(
                callback: fn(TemporaryUploadedFile $file): string => 'dom-na-wylacznosc-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
            )
            ->maxSize(8192)
            ->columnSpanFull()
            ->required(),

        RichEditor::make('text')
            ->label('Tekst')
            ->disableToolbarButtons([
                'blockquote',
                'strike',
                'codeBlock',
                

            ])
            ->required()
            ->columnSpanFull(),

            Select::make('exclusive_home_page_id')
            ->label('id strony')
            ->columns(1)
            ->relationship('exclusiveHomePage', 'id')
            ->required()
   
            ->default(function () {
               
                return \App\Models\ExclusiveHomePage::first()->id ?? null;
            }),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->reorderable('sort')
        ->defaultSort('sort', 'asc')
        ->columns([
            Tables\Columns\TextColumn::make('sort')
                ->label('#')
                ->sortable(),
            Tables\Columns\ImageColumn::make('image')
                ->label('Banner'),

            Tables\Columns\TextColumn::make('text')
                ->label('Treść')
                ->limit(40)
                ->formatStateUsing(function ($state) {
                    return Str::limit(strip_tags($state), 40);
                }),
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
                Tables\Actions\DeleteAction::make(),

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
            'index' => Pages\ListExclusiveHomePageBlocks::route('/'),
            'create' => Pages\CreateExclusiveHomePageBlock::route('/create'),
            'edit' => Pages\EditExclusiveHomePageBlock::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Dom na wyłączność - bloki');
    }
    public static function getPluralLabel(): string
    {
        return ('Dom na wyłączność - bloki');
    }

    public static function getLabel(): string
    {
        return ('Dom na wyłączność - bloki');
    }
}
