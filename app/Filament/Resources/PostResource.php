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
use Illuminate\Support\Str;

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
                    ->label('Tiêu Đề')
                     ->maxLength(255),
                Forms\Components\Select::make('category_id')
                    ->relationship('category','name')
                    ->label('Loại Bài Viết')
                    ->required(),
                Forms\Components\FileUpload::make('image')->nullable()->label('Hình Ảnh'),
                Forms\Components\RichEditor::make('content')
                    ->label('Nội Dung')
                    ->maxLength(65535)
                    ->required(),
            ]);
    }

    public static function table(Table $table)
    : Table{
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('title')
                    ->limit(20)
                     ->label('Tiêu Đề'),
                Tables\Columns\TextColumn::make('category.name')->label('Loại Bài Viết'),
                Tables\Columns\TextColumn::make('author.name')->label('Tên Tác Giả'),
                Tables\Columns\TextColumn::make('content')->label('Nội Dung')->limit(20),
                Tables\Columns\TextColumn::make('date')->date()->label('Ngày Đăng'),
                Tables\Columns\ImageColumn::make('image')->label("Hình Ảnh")->width(60)->height(40),
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
