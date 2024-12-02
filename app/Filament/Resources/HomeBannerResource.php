<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\HomeBanner;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Fieldset;

use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomeBannerResource\Pages;
use App\Filament\Resources\HomeBannerResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class HomeBannerResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = HomeBanner::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Strona główna';

    public static function getNavigationSort(): ?int
    {
        return 4;
    }

    public static function form(Form $form): Form
    {

        return $form
            ->schema([

                Forms\Components\FileUpload::make('image')
                    ->label('Zdjęcie')
                    ->directory('cta')
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => 'banner-bg-' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                    )
                    ->optimize('webp')
                    ->maxSize(8192)
                    ->columnSpanFull()
                    ->required(),
                Fieldset::make('Treść')
                    ->schema([

                        Forms\Components\TextInput::make('title')
                            ->label('Nagłówek')
                            ->columnSpanFull()
                            ->required(),

                        Forms\Components\TextInput::make('text')
                            ->label('Treść')
                            ->columnSpanFull()
                            ->required(),

                        Forms\Components\TextInput::make('link_text')
                            ->label('Tekst w linku')
                            ->columnSpanFull()
                            ->required(),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Zdjęcie'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Tekst')
                    ->description(function (HomeBanner $record) {
                        return Str::limit(strip_tags($record->subtitle), 40);
                    })
                    ->searchable()
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
            'index' => Pages\ListHomeBanners::route('/'),
            'create' => Pages\CreateHomeBanner::route('/create'),
            'edit' => Pages\EditHomeBanner::route('/{record}/edit'),
        ];
    }
     public static function getNavigationLabel(): string
    {
        return ('Banner');
    }
    public static function getPluralLabel(): string
    {
        return ('Banner');
    }

    public static function getLabel(): string
    {
        return ('Banner');
    }
}
