<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceiptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('widgets')->insert([
            [
                'name'=>'Slide 1',
                'slug'=>'slide-1',
                'description'=>'Slide 1',
                'image'=>'photo-1570425387687-d2a34c7304a9.avif',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
        ]);
    }
}
