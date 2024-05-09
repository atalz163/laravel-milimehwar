<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InterviewsResource\Pages;
use App\Filament\Resources\InterviewsResource\RelationManagers;
use App\Models\Interviews;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;



class InterviewsResource extends Resource
{

    protected static ?string $model = Interviews::class;
    protected static bool $shouldRegisterNavigation = false;
    protected static ?string $navigationIcon = 'heroicon-o-microphone';
   

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
                        ->relationship('item', 'name', function ($query) {
                            $query->where('name', 'Interviews');
                        })
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
            'index' => Pages\ListInterviews::route('/'),
            'create' => Pages\CreateInterviews::route('/create'),
            'view' => Pages\ViewInterviews::route('/{record}'),
            'edit' => Pages\EditInterviews::route('/{record}/edit'),
        ];
    }
}
