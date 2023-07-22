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
            [
                'name'=>'Giày Black Nike ',
                'slug'=>'giay-black-nike',
                'quantity'=>'6',
                'price'=>'420000',
                'category_id'=>'1',
                'description'=>'Giày Nike đen chính hãng, sang trọng',
                'view'=>'426',
                'image'=>'photo-1543508282-6319a3e2621f.avif',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'name'=>'Giày Adidas Custom F1',
                'slug'=>'giay-adidas-custom-f1',
                'quantity'=>'9',
                'price'=>'730000',
                'category_id'=>'1',
                'description'=>'Giày số 12',
                'view'=>'616',
                'image'=>'photo-1595341888016-a392ef81b7de.avif',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'name'=>'Adidas Red1 MS',
                'slug'=>'adidas-red1-ms',
                'quantity'=>'9',
                'price'=>'920000',
                'category_id'=>'1',
                'description'=>'Giày adidas red 1 ms',
                'view'=>'726',
                'image'=>'photo-1575537302964-96cd47c06b1b.avif',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'name'=>'Kính mát Sayho Mytux',
                'slug'=>'kinh-mat-sayho-mytux',
                'quantity'=>'11',
                'price'=>'420000',
                'category_id'=>'2',
                'description'=>'Giày số 12',
                'view'=>'116',
                'image'=>'photo-1574258495973-f010dfbb5371.avif',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'name'=>'Kính Gọng Đen BlackMX Sang Trọng',
                'slug'=>'kinh-hong-den-blackmx-sang-trong',
                'quantity'=>'7',
                'price'=>'710000',
                'category_id'=>'2',
                'description'=>'Kính gọn đen thanh lịch, sang trọng',
                'view'=>'926',
                'image'=>'photo-1556306510-31ca015374b0.avif',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'name'=>'Kính Gọng Hồng Quý Phái',
                'slug'=>'king-gong-hong-quy-phai',
                'quantity'=>'20',
                'price'=>'290000',
                'category_id'=>'2',
                'description'=>'Kính gọng hồng',
                'view'=>'926',
                'image'=>'photo-1582142407894-ec85a1260a46.avif',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'name'=>'Túi xách da Kaimy OX',
                'slug'=>'tui-xach-da-kaimy-ox',
                'quantity'=>'2',
                'price'=>'1420000',
                'category_id'=>'3',
                'description'=>'Túi xách da sang trọng, phù hợp làm quà cho các nàng',
                'view'=>'1126',
                'image'=>'photo-1605733513597-a8f8341084e6.avif',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'name'=>'Túi xách Hotiwa Xanh Nhỏ Gọn',
                'slug'=>'tui-xach-hotiwa-xanh-nho-gon',
                'quantity'=>'6',
                'price'=>'1920000',
                'category_id'=>'3',
                'description'=>'Túi xách Hotiwa Xanh Nhỏ Gọn',
                'view'=>'816',
                'image'=>'photo-1632282003890-020318a49e62.avif',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'name'=>'Mẫu túi mới nhà Prada XP7 ',
                'slug'=>'mau-tui-moi-nha-prada-xp7',
                'quantity'=>'3',
                'price'=>'2420000',
                'category_id'=>'3',
                'description'=>'Mẫu túi mới nhà Prada XP7',
                'view'=>'1026',
                'image'=>'photo-1620999590313-0b243aa9f740.avif',
                'created_at'=>Now(),'updated_at'=>Now()
            ]
        ]);
    }
}
