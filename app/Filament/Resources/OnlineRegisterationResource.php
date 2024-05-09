<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OnlineRegisterationResource\Pages;
use App\Filament\Resources\OnlineRegisterationResource\RelationManagers;
use App\Models\OnlineRegisteration;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput as ComponentsTextInput;
use Filament\Forms\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OnlineRegisterationResource extends Resource
{
    protected static ?string $model = OnlineRegisteration::class;
    
    protected static ?string $navigationIcon = 'heroicon-o-user-plus';
    protected static ?string $navigationGroup = "Website Content";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('full_name'),
                Forms\Components\TextInput::make('father_name'),
                Forms\Components\TextInput::make('grand_father_name'),
                Select::make('gender')->options([
                    'male' => 'Male',
                    'female' => 'Female',
                    'other' => 'Other',
                ]),
                Select::make('marital_status')->options([
                    'single' => 'Single',
                    'married' => 'Married',
                    'divorced' => 'Divorced',
                    'widowed' => 'Widowed',
                    'separated' => 'Separated',
                ]),
                Forms\Components\TextInput::make('blood_group'),
                Forms\Components\TextInput::make('friend_number'),
                Forms\Components\TextInput::make('mobile'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\TextInput::make('province'),
                Forms\Components\TextInput::make('village'),
                Forms\Components\TextInput::make('district'),
                Forms\Components\TextInput::make('current_address'),
                Forms\Components\TextInput::make('current_job'),
                Forms\Components\TextInput::make('languages'),
                Forms\Components\TextInput::make('mother_tounge'),
                Forms\Components\TextInput::make('education_level'),
                Forms\Components\TextInput::make('talent'),
                Forms\Components\Toggle::make('approved')
                            ->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name')->searchable()->label('Full Name'),
                TextColumn::make('mobile')->searchable(),
                TextColumn::make('email')->searchable(),
                Tables\Columns\IconColumn::make('approved')
                ->boolean(),
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
            'index' => Pages\ListOnlineRegisterations::route('/'),
            'create' => Pages\CreateOnlineRegisteration::route('/create'),
            'edit' => Pages\EditOnlineRegisteration::route('/{record}/edit'),
        ];
    }
}
