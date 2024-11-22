<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Regulations;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Livewire\Component as Livewire;
use Filament\Forms\Components\Component;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RegulationsResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Filament\Resources\RegulationsResource\RelationManagers;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;

class RegulationsResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Regulations::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Strony informacyjne';

    public static function form(Form $form): Form
    {
        return $form
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

                Forms\Components\FileUpload::make('banner')
                ->label('Banner')
                ->directory('banner')
                ->getUploadedFileNameForStorageUsing(
                    fn(TemporaryUploadedFile $file): string => 'banner-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                )
                ->maxSize(8192)
                ->columnSpanFull()
                ->optimize('webp')
                ->image()
                ->required(),
            Forms\Components\RichEditor::make('content')
                ->label('Treść')
                ->toolbarButtons([
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'h2',
                    'h3',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ])
                ->required()
                ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('meta_title')
                    ->label('Tytuł meta')
                    ->description(function (Regulations $record) {
                        return Str::limit(strip_tags($record->meta_desc), 40);
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
            'index' => Pages\ListRegulations::route('/'),
            'create' => Pages\CreateRegulations::route('/create'),
            'edit' => Pages\EditRegulations::route('/{record}/edit'),
        ];
    }


    public static function getNavigationLabel(): string
    {
        return __('Regulamin');
    }
    public static function getPluralLabel(): string
    {
        return __('Regulamin');
    }

    public static function getLabel(): string
    {
        return __('Regulamin');
    }
}
