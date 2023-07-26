<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CartResource\Pages;
use App\Filament\Resources\CartResource\RelationManagers;
use App\Models\Cart;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CartResource extends Resource
{
    protected static ?string $model = Cart::class;

    protected static ?string $navigationLabel = 'Giỏ Hàng';

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('product_id')
                    ->required()->label('ID Sản Phẩm'),
                Forms\Components\TextInput::make('user_id')
                    ->required()->label('ID Người Dùng'),
                Forms\Components\TextInput::make('total')
                    ->required()->label('Tổng Cộng'),
                Forms\Components\TextInput::make('quantity')
                    ->required()->label('Số Lượng'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_id')->label('ID Sản Phẩm'),
                Tables\Columns\TextColumn::make('user_id')->label('ID Người dùng'),
                Tables\Columns\TextColumn::make('total')->label('Tổng Cộng'),
                Tables\Columns\TextColumn::make('quantity')->label('Số Lượng'),
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
            'index' => Pages\ManageCarts::route('/'),
        ];
    }    
}
