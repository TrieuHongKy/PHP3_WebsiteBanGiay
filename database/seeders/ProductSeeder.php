<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name'=>'Sản phẩm số 1','slug'=>'san-pham-so-1','price'=>'310000','category_id'=>'2','description'=>'Sản phẩm số 1','view'=>'712','image'=>'2SJaf2zuS7O18DiyNcF5EV6TOxpjnK-metaQmVhdXR5UGx1c18yMDE5MTIyMzE0MjUzNTcxNl9zYXZlLmpwZw==-.jpg','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Sản phẩm số 2','slug'=>'san-pham-so-2','price'=>'320000','category_id'=>'3','description'=>'Sản phẩm số 2','view'=>'312','image'=>'9CUMxLtVUEI9D5A28RA5KwlPi5Azja-metaSU1HMjAxOTA5MTUxOTEzNDYuanBn-.jpg','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Sản phẩm số 3','slug'=>'san-pham-so-3','price'=>'330000','category_id'=>'4','description'=>'Sản phẩm số 3','view'=>'788','image'=>'97gnT2OLmWGOd0LxTHGNZRMnneXQ7c-metaQmVhdXR5UGx1c18yMDE5MTIyMzE0MzIzNTA4NF9zYXZlLmpwZw==-.jpg','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Sản phẩm số 4','slug'=>'san-pham-so-4','price'=>'340000','category_id'=>'5','description'=>'Sản phẩm số 4','view'=>'633','image'=>'a9W36nRozvUpCaMCAZ8AI6jrVbXgi3-metaMjAyMTA3MDJfMjFfMzNfMDUyMTMucG5n-.jpg','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Sản phẩm số 5','slug'=>'san-pham-so-5','price'=>'350000','category_id'=>'6','description'=>'Sản phẩm số 5','view'=>'516','image'=>'dlszxekVN46V6sjaQy9faqVDEdYg2T-metaRkJfSU1HXzE2MzY1ODY4NjYzMjQuanBn-.jpg','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Sản phẩm số 6','slug'=>'san-pham-so-6','price'=>'360000','category_id'=>'7','description'=>'Sản phẩm số 6','view'=>'910','image'=>'hZNNgjQ2bTp3Karo8qlH541VKX2FBW-metaejQzNTA1ODA0MTEzMTZfNjI2M2NlNjg0NjFhY2M0ZDg1ZDg3ZWQwNzE4Y2U0MjIuanBn-.jpg','created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}
