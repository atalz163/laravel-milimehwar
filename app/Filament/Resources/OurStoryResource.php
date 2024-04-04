<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurStoryResource\Pages;
use App\Filament\Resources\OurStoryResource\RelationManagers;
use App\Models\OurStory;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OurStoryResource extends Resource
{
    protected static ?string $model = OurStory::class;

    protected static ?string $navigationIcon = 'heroicon-o-hand-raised';
    protected static ?string $navigationGroup = "HomePage Widgets";

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
                            ->label('Body')
                            ->required()
                            ->columnSpanFull(),


                    ])->columnSpan(8),

                Section::make([
                    Forms\Components\Select::make('language_id')
                        ->relationship('language', 'name')
                        ->required(),
                    Forms\Components\Select::make('item_id')
                        ->relationship('item', 'name', function ($query) {
                            $query->where('name', 'Our Story');
                        })
                        ->label('Category Title')
                        ->required(),
                    Forms\Components\FileUpload::make('thumbnail')
                        ->directory('ourstory-attachment')
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
                Tables\Columns\TextColumn::make('language.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('item.name')
                    ->label('Category Title')
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListOurStories::route('/'),
            'create' => Pages\CreateOurStory::route('/create'),
            'view' => Pages\ViewOurStory::route('/{record}'),
            'edit' => Pages\EditOurStory::route('/{record}/edit'),
        ];
    }
}
