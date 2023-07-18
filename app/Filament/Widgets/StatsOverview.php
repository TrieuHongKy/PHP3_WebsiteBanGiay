<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
//            Card::make('Total Users', User::count()),
//            Card::make('Total Products', Product::count()),
//            Card::make('Total Post', Post::count()),
//            Card::make('Users Registered Today', User::whereDate('created_at', today())->count()),
//            Card::make('Product Created Today', Product::whereDate('created_at', today())->count()),
//            Card::make('Post Created Today', Post::whereDate('created_at', today())->count()),
        ];
    }
}
