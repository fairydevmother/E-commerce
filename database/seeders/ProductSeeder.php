<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
            'name'=>'Camera',
            "price"=>"2400",
            "description"=>"made in Korea",
            "category"=>"electronics",
            "gallery"=> "https://www.trendyol.com/kamera-x-c104032"


        ]);
    }
}
