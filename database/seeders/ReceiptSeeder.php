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
        DB::table('receipts')->insert([
            [
                'cart_id'=>'1',
                'date'=>'2023-7-26',
                'payment_method'=>'Ship COD',
                'address'=>'Can Tho',
                'total'=>'1700000',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
        ]);
    }
}
