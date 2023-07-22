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
            ['name'=>'Giày','slug'=>'giay','description'=>'Bao gồm các loại giày như giày nike, adidas, giày tây và v.v','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Kính Mát','slug'=>'kinh-mat','description'=>'Các loại kính mát số 1 thị trường trong những năm gần đây','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Túi Xách','slug'=>'tui-xach','description'=>'Đa dạng túi xách của các hãng từ Gucci, Supreme đến Louis Vuitton','created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}
