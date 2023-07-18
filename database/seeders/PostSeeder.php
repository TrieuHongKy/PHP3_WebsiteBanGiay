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
           ['title'=>'Bài viết số 1','content'=>'Bài viết số 1','author'=>'Triệu Hồng Ký','date'=>toDay(),'image'=>'XvdzYrMyEsDrET3Roz0GqthGZVB4Uc-metaSU1HMjAyMTA0MDMyMzM2MjIuanBn-.jpg','category_id'=>'18','created_at'=>Now(),'updated_at'=>Now()],
           ['title'=>'Bài viết số 2','content'=>'Bài viết số 2','author'=>'Ký Hồng Triệu','date'=>toDay(),'image'=>'i5XNs6DFS1iKne46A0JFEAsrRXUiRs-metaSU1HMjAyMjA0MTAyMjE4MTkuanBn-.jpg','category_id'=>'13','created_at'=>Now(),'updated_at'=>Now()],
           ['title'=>'Bài viết số 3','content'=>'Bài viết số 3','author'=>'Hồng Ký Triệu','date'=>toDay(),'image'=>'ISeHgUctZWQDP8D5tdlbCxxzS0Tg5M-metaZG93bmxvYWQyMDIzMDYwMTA5MzMzOC5wbmc=-.png','category_id'=>'14','created_at'=>Now(),'updated_at'=>Now()],
           ['title'=>'Bài viết số 4','content'=>'Bài viết số 4','author'=>'Triệu Ký Hồng','date'=>toDay(),'image'=>'m7QMQ3YEvbHj0Rg0c2FKxTUbPuyQHL-metaQmVhdXR5UGx1c18yMDE5MTIyMzE0MzUwNzU4MV9zYXZlLmpwZw==-.jpg','category_id'=>'15','created_at'=>Now(),'updated_at'=>Now()],
           ['title'=>'Bài viết số 5','content'=>'Bài viết số 5','author'=>'Ký Triệu Hồng','date'=>toDay(),'image'=>'poff3zURG266khZEpfzRfHFQZCKpkb-metaRkJfSU1HXzE2MzY1ODY4NjYzMjQuanBn-.jpg','category_id'=>'16','created_at'=>Now(),'updated_at'=>Now()],
           ['title'=>'Bài viết số 6','content'=>'Bài viết số 6','author'=>'Hồng Triệu Ký','date'=>toDay(),'image'=>'TjXUJ5JDXHyuM3mkmVvjs7ox2E18Rm-metaSU1HMjAyMTEyMzAxNDQwMjYuanBn-.jpg','category_id'=>'17','created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}
