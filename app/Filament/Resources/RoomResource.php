<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Room;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use Livewire\Component as Livewire;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\RoomResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RoomResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;

class RoomResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Room::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'Pokoje';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Tabs::make('Tabs')
                    ->columnSpanFull()
                    ->tabs([

                        // MAIN INFO
                        Tabs\Tab::make('Główne informacje')
                            ->icon('heroicon-o-information-circle')
                            ->columns()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Nazwa Pokoju')
                                    ->unique(ignoreRecord: true)
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->required()
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

                                Forms\Components\TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->placeholder('Przyjazny adres url który wygeneruje się automatycznie')
                                    ->readOnly(),

                                Forms\Components\TextInput::make('beds')
                                    ->label('Liczba łóżek')
                                    ->required()
                                    ->placeholder('np. 1 podwójne')
                                    ->columns(1),

                                Forms\Components\TextInput::make('bathrooms')
                                    ->label('Liczba łazienek')
                                    ->required()
                                    ->placeholder('np. 1 łazienka')
                                    ->columns(1),




                            ]),

                        // DESC
                        Tabs\Tab::make('Opisy')
                            ->icon('heroicon-o-pencil-square')
                            ->columns()
                            ->schema([
                                RichEditor::make('short_desc')
                                    ->label('Krótki opis')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                    ])
                                    ->required()
                                    ->placeholder('Pojawi się na liście apartamentów')
                                    ->columnSpanFull(),

                                RichEditor::make('desc')
                                    ->label('Opis główny')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'bulletList',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'underline',
                                        'undo',
                                    ])
                                    ->required()
                                    ->placeholder('Pojawi się na stronie apartamentu')
                                    ->columnSpanFull(),
                                RichEditor::make('equipment')
                                    ->label('Wyposażenie')
                                    ->toolbarButtons([
                                        'bulletList',
                                    ])
                                    ->required()
                                    ->columnSpanFull(),
                            ]),

                        // PHOTOS
                        Tabs\Tab::make('Zdjęcia')
                            ->icon('heroicon-o-photo')
                            ->columns()
                            ->schema([
                                Forms\Components\FileUpload::make('thumbnail')
                                    ->label('Miniaturka')
                                    ->directory('rooms-thumbnails')
                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'pokoj-miniaturka' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                                    )
                                    ->image()
                                    ->maxSize(8192)
                                    ->optimize('webp')
                                    ->imageEditor()
                                    ->imageEditorAspectRatios([
                                        null,
                                        '16:9',
                                        '4:3',
                                        '1:1',
                                    ])
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('gallery')
                                    ->label('Galeria')
                                    ->directory('rooms-galleries')
                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'pokoj-galeria-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
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
                                    ->required()

                                    ->columnSpanFull(),
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
                                    ->required()
                                    ->minLength(10)
                                    ->maxLength(75)
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                        $validate = $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->columnSpanFull(),

                                TextInput::make('meta_desc')
                                ->required()
                                    ->label('Opis Meta')
                                    ->placeholder('Meta description to krótki opis strony internetowej wyświetlany w wynikach wyszukiwarek.')
                                    ->characterLimit(160)
                                    ->minLength(10)
                                    ->maxLength(180)
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                        $validate = $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->columnSpanFull(),
                            ])

                    ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->reorderable('sort')
        ->defaultSort('sort', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                ->label('#')
                ->sortable(),

            Tables\Columns\ImageColumn::make('thumbnail')
                ->label('Miniaturka'),

            Tables\Columns\TextColumn::make('title')
                ->label('Nazwa')
                ->description(function (Room $record) {
                    return Str::limit(strip_tags($record->desc), 40);
                })
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Data utworzenia')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->label('Data modyfikacji')
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
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Pokoje');
    }
    public static function getPluralLabel(): string
    {
        return ('Pokoje');
    }

    public static function getLabel(): string
    {
        return ('Pokój');
    }
}
