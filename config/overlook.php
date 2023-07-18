<?php

return [
    'includes' => [
//        App\Filament\Resources\Blog\AuthorResource::class,
        App\Filament\Resources\UserResource::class,
        App\Filament\Resources\CategoryResource::class,
        App\Filament\Resources\PostResource::class,
        App\Filament\Resources\ProductCategoryResource::class,
        App\Filament\Resources\ProductResource::class,
    ],
    'excludes' => [
        // App\Filament\Resources\Blog\AuthorResource::class,
    ],
    'should_convert_count' => true,
    'enable_convert_tooltip' => true,
    'grid' => [
        'default' => 2,
        'sm' => 2,
        'md' => 3,
        'lg' => 4,
        'xl' => 5,
        '2xl' => null,
    ],
    'disable_css' => false,
    'disable_sorting' => true,
];
