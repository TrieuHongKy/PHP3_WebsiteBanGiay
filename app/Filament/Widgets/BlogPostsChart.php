<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
//use Filament\Widgets\PieChartWidget;
use Filament\Widgets\BarChartWidget;
use Filament\Widgets\RadarChartWidget;

class BlogPostsChart extends BarChartWidget
{
    protected static ?string $heading = 'Biểu đồ';

    protected function getFilters()
    : ?array{
        return [
            'today' => 'Hôm nay',
            'week' => 'Tuần trước',
            'month' => 'Tháng trước',
            'year' => 'Năm trước',
        ];
    }

    protected function getData(): array
    {
        $activeFilter = $this->filter;
        return [
            'labels' => ['Bài viết','Sản phẩm','Loại bài viết','Loại sản phẩm'],
            'datasets' => [
                [
                    'label' => 'Đồ thị thống kê',
                    'data' => [
                        Post::count(),
                        Product::count(),
                        Category::count(),
                        ProductCategory::count()
                    ],
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    'borderColor' => [
                        'red',
                        'black',
                        'yellow',
                        'brown'
                    ],
                ],

            ],
        ];
    }
}
