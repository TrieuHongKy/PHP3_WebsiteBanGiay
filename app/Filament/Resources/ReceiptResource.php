<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecieptResource\Pages;
use App\Filament\Resources\RecieptResource\RelationManagers;
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

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('cart_id')
                    ->required(),
                Forms\Components\DateTimePicker::make('date')
                    ->required(),
                Forms\Components\TextInput::make('payment_method')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('total')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cart_id'),
                Tables\Columns\TextColumn::make('date')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('payment_method'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('total'),
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
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageReceipts::route('/'),
        ];
    }    
}
