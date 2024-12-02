<?php

namespace App\Filament\Resources;

use App\Models\Cta;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Fieldset;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CtaResource\Pages;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CtaResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class CtaResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Cta::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    protected static ?string $navigationGroup = 'Strona główna';

    public static function getNavigationSort(): ?int
    {
        return 5;
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Shout::make('so-important')
            ->content('CTA pojawi się na stronie głównej oraz na stonie pojedyńczego pokoju')
            ->color('info')
            ->columnSpanFull(),
            Forms\Components\FileUpload::make('image')
                ->label('Zdjęcie')
                ->directory('cta')
                ->getUploadedFileNameForStorageUsing(
                    fn(TemporaryUploadedFile $file): string => 'cta-bg-' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
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
            ->description(function (Cta $record) {
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
            'index' => Pages\ListCtas::route('/'),
            'create' => Pages\CreateCta::route('/create'),
            'edit' => Pages\EditCta::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Call to Action');
    }
    public static function getPluralLabel(): string
    {
        return ('Call to Action');
    }

    public static function getLabel(): string
    {
        return ('Call to Action');
    }
}
