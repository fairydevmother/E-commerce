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
           [
            'name'=>'Smart Phone',
            "price"=>"1000",
            "description"=>"Pretium nibh ipsum consequat nisl vel pretium lectus quam. ",
            "category"=>"electronics",
            "gallery"=> "https://consumer.huawei.com/content/dam/huawei-cbg-site/common/mkt/pdp/admin-image/phones/nova-y90/list/blue.png"
         
           ],
           [
            'name'=>'Computer',
            "price"=>"3400",
            "description"=>"Pretium nibh ipsum consequat nisl vel pretium lectus quam. ",
            "category"=>"electronics",
            "gallery"=> "https://img-monsternotebook.mncdn.com/UPLOAD/product_semruk-s7-V8.1/Semruk.png"

   
           ]
            
        
        ]);
    }
}
