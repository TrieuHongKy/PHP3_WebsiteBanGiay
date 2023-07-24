<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $navigationLabel = 'Sản phẩm';

    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function (Closure $set, $state) {
                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required(),
                Forms\Components\TextInput::make('total'),
                Forms\Components\TextInput::make('view')
                    ->default(1),
                Forms\Components\TextInput::make('quantity')
                    ->default(1),
                Forms\Components\Select::make('category_id')
                    ->relationship('category','name')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->required(),
                Forms\Components\Textarea::make('description'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('name')->label('Tên Sản Phẩm'),
                Tables\Columns\ImageColumn::make('image')->label('Hình Ảnh'),
                Tables\Columns\TextColumn::make('price')->label('Giá'),
                Tables\Columns\TextColumn::make('quantity')->label('Tồn Kho'),
                Tables\Columns\TextColumn::make('view')->label('Lượt Xem'),
                Tables\Columns\TextColumn::make('category.name')->label('Loại Sản Phẩm'),
                Tables\Columns\TextColumn::make('description')->label('Mô Tả'),
                Tables\Columns\TextColumn::make('slug'),
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
            'index' => Pages\ManageProducts::route('/'),
        ];
    }    
}
