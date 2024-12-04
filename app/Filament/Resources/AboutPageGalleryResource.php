<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\AboutPageGallery;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AboutPageGalleryResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Filament\Resources\AboutPageGalleryResource\RelationManagers;

class AboutPageGalleryResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = AboutPageGallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';

    protected static ?string $navigationGroup = 'O willi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Nagłówek')
                    ->required()
                    ->columns(1),

                Forms\Components\FileUpload::make('images')
                    ->label('Galeria')
                    ->directory('about-gallery')
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => 'o-willi-galeria-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                    )
                    ->multiple()
                    ->appendFiles()
                    ->image()
                    ->reorderable()
                    ->hint('Galeria musi mieć co najmniej 4 zdjęcia')
                    ->maxSize(8192)
                    ->optimize('webp')
                    ->imageEditor()
                    ->minFiles(4)
                    ->maxFiles(16)
                    ->panelLayout('grid')
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->required()->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('images')
                ->label('Zdjęcia')
                ->limit(5)
                ->limitedRemainingText(),
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
            'index' => Pages\ListAboutPageGalleries::route('/'),
            'create' => Pages\CreateAboutPageGallery::route('/create'),
            'edit' => Pages\EditAboutPageGallery::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Galeria');
    }
    public static function getPluralLabel(): string
    {
        return ('Galeria');
    }

    public static function getLabel(): string
    {
        return ('Galeria');
    }
}
