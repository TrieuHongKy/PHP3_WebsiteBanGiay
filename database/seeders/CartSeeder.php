<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carts')->insert([
            [
                'product_id'=>'1',
                'user_id'=>'1',
                'total'=>'700000',
                'quantity'=>'4',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
        ]);
    }
}
