<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource{

    protected static ?string $navigationLabel = 'Bài Viết';

    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form)
    : Form{
        return
            $form
            ->schema([
                Forms\Components\TextInput::make('title')
                     ->required()
                     ->maxLength(255),
                Forms\Components\Select::make('category_id')
                    ->relationship('category','name')
                    ->required(),
                Forms\Components\DatePicker::make('date')->required(),
                Forms\Components\FileUpload::make('image')->nullable(),
                Forms\Components\Textarea::make('content')
                    ->maxLength(65535)
                    ->required(),
            ]);
    }

    public static function table(Table $table)
    : Table{
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('title')
                     ->limit(100),
                Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('author.name'),
                Tables\Columns\TextColumn::make('content'),
                Tables\Columns\TextColumn::make('date'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                      ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                      ->dateTime(),
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

    public static function getPages()
    : array{
        return [
            'index' => Pages\ManagePosts::route('/'),
        ];
    }
}
