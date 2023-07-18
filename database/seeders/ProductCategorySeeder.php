<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_categories')->insert([
            ['name'=>'Loại sản phẩm số 1','description'=>'Loại sản phẩm số 1','status'=>'1' ,'created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Loại sản phẩm số 2','description'=>'Loại sản phẩm số 2','status'=>'1' ,'created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Loại sản phẩm số 3','description'=>'Loại sản phẩm số 3','status'=>'1' ,'created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Loại sản phẩm số 4','description'=>'Loại sản phẩm số 4','status'=>'1' ,'created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Loại sản phẩm số 5','description'=>'Loại sản phẩm số 5','status'=>'1' ,'created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Loại sản phẩm số 6','description'=>'Loại sản phẩm số 6','status'=>'1' ,'created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}
