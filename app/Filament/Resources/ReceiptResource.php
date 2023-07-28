<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReceiptResource\Pages;
use App\Filament\Resources\ReceiptResource\RelationManagers;
use App\Models\Receipt;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReceiptResource extends Resource
{
    protected static ?string $model = Receipt::class;

    protected static ?string $navigationLabel = 'Hóa Đơn';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('cart_id')
                    ->label('ID Giỏ Hàng')
                    ->relationship('cart', 'id')
                    ->required(),
                Forms\Components\TextInput::make('payment_method')
                    ->label('Phương Thức Thanh Toán')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->label('Địa Chỉ')
                    ->maxLength(255),
                Forms\Components\TextInput::make('total')
                    ->required()
                    ->label('Tổng Tiền'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cart.id')
                    ->label('ID Giỏ Hàng'),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->label('Ngày Tạo Hóa Đơn'),
                Tables\Columns\TextColumn::make('payment_method')
                    ->label('Phương Thức Thanh Toán'),
                Tables\Columns\TextColumn::make('address')
                    ->label('Địa Chỉ'),
                Tables\Columns\TextColumn::make('total')
                    ->label('Tổng Tiền'),
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
            'index' => Pages\ManageReceipts::route('/'),
        ];
    }    
}
