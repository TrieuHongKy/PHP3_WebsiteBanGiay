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
            [
                'name'=>'Phong cách đường phố',
                'slug'=>'phong-cach-duong-pho',
                'description'=>'Cách cách phối đồ theo phong cách đường phố được giới trẻ Việt Nam hiện nay yêu thích',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'name'=>'Thời trang thủ công',
                'slug'=>'thoi-trang-thu-cong',
                'description'=>'Các thời trang thủ công, mỹ nghệ được các nghệ nhân tạo ra từ chính đôi bàn tay mà không cần dùng đến sự giúp đỡ của công nghệ, máy móc.',
                'created_at'=>Now(),'updated_at'=>Now()],
            [
                'name'=>'Cách phối đồ cho mùa hè',
                'slug'=>'cach-phoi-do-chi-mua-he',
                'description'=>'Mùa hè phối đồ sao cho mát mẻ nhưng vẫn giữ được độ thẩm mỹ, gu ăn mặc bản thân? Tất cả đã có ngay trong bài viết dưới đây.',
                'created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}
