<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name'=>'Loại bài viết số 1','description'=>'Loại bài viết số 1','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Loại bài viết số 2','description'=>'Loại bài viết số 2','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Loại bài viết số 3','description'=>'Loại bài viết số 3','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Loại bài viết số 4','description'=>'Loại bài viết số 4','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Loại bài viết số 5','description'=>'Loại bài viết số 5','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Loại bài viết số 6','description'=>'Loại bài viết số 6','created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}
