<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsTranslationResource\Pages;
use App\Filament\Resources\NewsTranslationResource\RelationManagers;
use App\Models\NewsTranslation;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class NewsTranslationResource extends Resource
{
    protected static ?string $model = NewsTranslation::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = "Website Extra";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(2048),
                        Forms\Components\RichEditor::make('body')
                            ->label('News Body')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Toggle::make('active')
                            ->required(),
                        Forms\Components\DatePicker::make('published_at')
                            ->required(),


                    ])->columnSpan(8),

                Section::make([
                    Forms\Components\Select::make('language_id')
                        ->relationship('language', 'name')
                        ->required(),
                    Forms\Components\Select::make('item_id')
                        ->relationship('item', 'name')
                        ->label('Category Title')
                        ->required(),
                    Forms\Components\FileUpload::make('thumbnail')
                        ->directory('news-attachment')
                        ->preserveFilenames()
                        ->image()
                        ->imageEditor(),
                ])->columnSpan(4),





            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->searchable(['title', 'body'])
                    ->sortable(),

                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('language.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('item.name')
                    ->label('Category Title')
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),


                Tables\Columns\TextColumn::make('published_at')
                    ->date()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    // Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListNewsTranslations::route('/'),
            'create' => Pages\CreateNewsTranslation::route('/create'),
            'view' => Pages\ViewNewsTranslation::route('/{record}'),
            'edit' => Pages\EditNewsTranslation::route('/{record}/edit'),
        ];
    }
}
