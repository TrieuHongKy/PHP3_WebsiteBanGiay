<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WidgetResource\Pages;
use App\Filament\Resources\WidgetResource\RelationManagers;
use App\Models\Widget;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WidgetResource extends Resource
{
    protected static ?string $model = Widget::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->unique()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->unique(),
                Forms\Components\Textarea::make('description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('description'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageWidgets::route('/'),
        ];
    }    
}
