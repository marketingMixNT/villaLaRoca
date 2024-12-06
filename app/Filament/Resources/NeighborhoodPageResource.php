<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\NeighborhoodPage;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Tabs;
use Livewire\Component as Livewire;
use App\Models\NeighborhoodPageBlock;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Component;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NeighborhoodPageResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;
use App\Filament\Resources\NeighborhoodPageResource\RelationManagers;

class NeighborhoodPageResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];}
    protected static ?string $model = NeighborhoodPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationGroup = 'Okolica';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Tabs::make('Tabs')
            ->columnSpanFull()
            ->tabs([

                // HEADER
                Tabs\Tab::make('Hero')
                    ->icon('heroicon-o-stop')
                    ->columns()
                    ->schema([
                        Forms\Components\FileUpload::make('banner')
                            ->label('Banner')
                            ->directory('banner')
                            ->getUploadedFileNameForStorageUsing(
                                fn(TemporaryUploadedFile $file): string => 'banner-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                            )
                            ->maxSize(8192)
                            ->columnSpanFull()
                            ->optimize('webp')
                            ->required(),

                        Forms\Components\TextInput::make('header_heading')
                        ->label('Nagłowek')
                            ->required()
                            ->columnSpanFull(),

                    ]),

                // TEXT
                Tabs\Tab::make('Treść')
                    ->icon('heroicon-o-pencil-square')
                    ->columns()
                    ->schema([
                        
                        Shout::make('info')
                                    ->content('Nagłówek oraz tekst są opcjonalne. Pojawią się nad blokami.')
                                    ->type('info')
                                    ->columnSpanFull(),
                                    
                                Forms\Components\TextInput::make('heading')
                                    ->label('Nagłowek')
                                    ->columnSpanFull(),

                                Forms\Components\Textarea::make('text')
                                    ->label('Tekst')
                                    ->columnSpanFull(),

                                    Shout::make('info')
                                    ->content(content: 'Bloki dodasz w dedykowanej zakładce.')
                                    ->type('info')
                                    ->columnSpanFull()
                                    ->color('info'),
                               
                           
                    ]),
                  

                // META
                Tabs\Tab::make('Meta')
                    ->icon('heroicon-o-globe-alt')
                    ->columns()
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Tytuł Meta')
                            ->placeholder('Meta title to tytuł strony internetowej wyświetlany w wynikach wyszukiwarek i na kartach przeglądarki.')
                            ->characterLimit(60)
                            ->minLength(10)
                            ->maxLength(75)
                            ->live(debounce: 1000)
                            ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                $validate = $livewire->validateOnly($component->getStatePath());
                            })
                            ->columnSpanFull()
                            ->required(),

                        TextInput::make('meta_desc')
                            ->label('Opis Meta')
                            ->placeholder('Meta description to krótki opis strony internetowej wyświetlany w wynikach wyszukiwarek.')
                            ->characterLimit(160)
                            ->minLength(10)
                            ->maxLength(180)
                            ->live(debounce: 1000)
                            ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                $validate = $livewire->validateOnly($component->getStatePath());
                            })
                            ->columnSpanFull()
                            ->required(),
                    ]),

            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\ImageColumn::make('banner')
            ->label('Banner'),

        Tables\Columns\TextColumn::make('header_heading')
            ->label('Nagłowek')
            ->description(function (NeighborhoodPage $record) {
                return Str::limit(strip_tags($record->heading), 40);
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
            'index' => Pages\ListNeighborhoodPages::route('/'),
            'create' => Pages\CreateNeighborhoodPage::route('/create'),
            'edit' => Pages\EditNeighborhoodPage::route('/{record}/edit'),
        ];
    }

       public static function getNavigationLabel(): string
    {
        return ('Treść');
    }
    public static function getPluralLabel(): string
    {
        return ('Treść');
    }

    public static function getLabel(): string
    {
        return ('Treść');
    }
}
