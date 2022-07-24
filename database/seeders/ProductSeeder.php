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
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
            "category"=>"electronics",
            "gallery"=> "https://img-monsternotebook.mncdn.com/UPLOAD/product_semruk-s7-V8.1/Semruk.png"

   
           ],
           [
            'name'=>'Smart TV',
            "price"=>"4400",
            "description"=>"Possimus quis earum veniam quasi aliquam eligendi, placeat qui corporis!",
            "category"=>"electronics",
            "gallery"=> "https://images.samsung.com/is/image/samsung/p6pim/tr/ue43au7000uxtk/gallery/tr-uhd-au7000-382854-ue43au7000uxtk-454386751?$720_576_PNG$"

   
           ],
           [
            'name'=>'Mouse',
            "price"=>"30",
            "description"=>"Pretium nibh ipsum consequat nisl vel pretium lectus quam. ",
            "category"=>"electronics",
            "gallery"=> "https://www.casper.com.tr/uploads/2021/07/excalibur-gx21-mouse-2_op.webp"

   
           ]
             
        ]);
    }
}
