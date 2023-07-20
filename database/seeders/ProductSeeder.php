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
            ['name'=>'Giày số 1','slug'=>'san-pham-so-1','quantity'=>'21','price'=>'310000','category_id'=>'2','description'=>'Giày số 1','view'=>'712','image'=>'photo-1542291026-7eec264c27ff.avif','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Giày số 2','slug'=>'san-pham-so-2','quantity'=>'41','price'=>'320000','category_id'=>'3','description'=>'Giày số 2','view'=>'312','image'=>'photo-1549298916-b41d501d3772.avif','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Giày số 3','slug'=>'san-pham-so-3','quantity'=>'25','price'=>'330000','category_id'=>'4','description'=>'Giày số 3','view'=>'788','image'=>'photo-1551107696-a4b0c5a0d9a2.avif','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Giày số 4','slug'=>'san-pham-so-4','quantity'=>'86','price'=>'340000','category_id'=>'5','description'=>'Giày số 4','view'=>'633','image'=>'photo-1491553895911-0055eca6402d.avif','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Giày số 5','slug'=>'san-pham-so-5','quantity'=>'14','price'=>'350000','category_id'=>'6','description'=>'Giày số 5','view'=>'516','image'=>'photo-1515955656352-a1fa3ffcd111.avif','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Giày số 6','slug'=>'san-pham-so-6','quantity'=>'25','price'=>'360000','category_id'=>'1','description'=>'Giày số 6','view'=>'910','image'=>'photo-1516478177764-9fe5bd7e9717.avif','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Giày số 7','slug'=>'san-pham-so-7','quantity'=>'18','price'=>'370000','category_id'=>'1','description'=>'Giày số 7','view'=>'816','image'=>'photo-1587563871167-1ee9c731aefb.avif','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Giày số 8','slug'=>'san-pham-so-8','quantity'=>'66','price'=>'380000','category_id'=>'3','description'=>'Giày số 8','view'=>'627','image'=>'photo-1595341888016-a392ef81b7de.avif','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Giày số 9','slug'=>'san-pham-so-9','quantity'=>'54','price'=>'390000','category_id'=>'2','description'=>'Giày số 9','view'=>'918','image'=>'photo-1596702874230-b5706dfb5bc7.avif','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Giày số 10','slug'=>'san-pham-so-10','quantity'=>'87','price'=>'400000','category_id'=>'4','description'=>'Giày số 10','view'=>'613','image'=>'photo-1562183241-840b8af0721e.avif','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Giày số 11','slug'=>'san-pham-so-11','quantity'=>'15','price'=>'410000','category_id'=>'4','description'=>'Giày số 11','view'=>'319','image'=>'photo-1600185365926-3a2ce3cdb9eb.avif','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Giày số 12','slug'=>'san-pham-so-12','quantity'=>'6','price'=>'420000','category_id'=>'5','description'=>'Giày số 12','view'=>'726','image'=>'photo-1605034313761-73ea4a0cfbf3.avif','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Giày số 13','slug'=>'san-pham-so-13','quantity'=>'27','price'=>'430000','category_id'=>'6','description'=>'Giày số 13','view'=>'671','image'=>'photo-1606107557195-0e29a4b5b4aa.avif','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Giày số 14','slug'=>'san-pham-so-14','quantity'=>'53','price'=>'440000','category_id'=>'6','description'=>'Giày số 14','view'=>'846','image'=>'photo-1612902377756-414b2139d5e2.avif','created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}
