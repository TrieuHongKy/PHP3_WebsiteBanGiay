<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
           ['title'=>'Bài viết số 1','content'=>'Bài viết số 1','author'=>'Triệu Hồng Ký','date'=>toDay(),'image'=>'photo-1542291026-7eec264c27ff.avif','category_id'=>'1','created_at'=>Now(),'updated_at'=>Now()],
           ['title'=>'Bài viết số 2','content'=>'Bài viết số 2','author'=>'Ký Hồng Triệu','date'=>toDay(),'image'=>'photo-1549298916-b41d501d3772.avif','category_id'=>'2','created_at'=>Now(),'updated_at'=>Now()],
           ['title'=>'Bài viết số 3','content'=>'Bài viết số 3','author'=>'Hồng Ký Triệu','date'=>toDay(),'image'=>'photo-1551107696-a4b0c5a0d9a2.avif','category_id'=>'3','created_at'=>Now(),'updated_at'=>Now()],
           ['title'=>'Bài viết số 4','content'=>'Bài viết số 4','author'=>'Triệu Ký Hồng','date'=>toDay(),'image'=>'photo-1491553895911-0055eca6402d.avif','category_id'=>'4','created_at'=>Now(),'updated_at'=>Now()],
           ['title'=>'Bài viết số 5','content'=>'Bài viết số 5','author'=>'Ký Triệu Hồng','date'=>toDay(),'image'=>'photo-1515955656352-a1fa3ffcd111.avif','category_id'=>'5','created_at'=>Now(),'updated_at'=>Now()],
           ['title'=>'Bài viết số 6','content'=>'Bài viết số 6','author'=>'Hồng Triệu Ký','date'=>toDay(),'image'=>'photo-1516478177764-9fe5bd7e9717.avif','category_id'=>'6','created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}
