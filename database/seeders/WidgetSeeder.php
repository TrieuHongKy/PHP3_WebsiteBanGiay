<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WidgetSeeder extends Seeder
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
            [
                'name'=>'Slide 2',
                'slug'=>'slide-2',
                'description'=>'Slide 2',
                'image'=>'photo-1651823644613-4909ffd40614.avif',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'name'=>'Slide 3',
                'slug'=>'slide-3',
                'description'=>'Slide 4',
                'image'=>'photo-1524499158189-513f0f3f6c4d.avif',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
        ]);
    }
}
