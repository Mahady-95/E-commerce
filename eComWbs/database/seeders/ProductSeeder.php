<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        DB::table('products')->insert(
            [
                [
                    'name'=>'Oppo Mobile',
                    'price'=>'50',
                    'description'=>'A smertphone with 1gb ram and much more features',
                    'category'=>'Mobile',
                    'gallery'=>'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/darwin/f19-pro/middlebanner/A94-middle-banner.jpg.thumb.webp'
                ],
                [
                    'name'=>'Sony Tv',
                    'price'=>'199',
                    'description'=>'A smart tv with much more features',
                    'category'=>'Tv',
                    'gallery'=>'https://static.toiimg.com/photo/87297981.cms?pl=53016'
                ],
                [
                    'name'=>'Huawei Mobile',
                    'price'=>'300',
                    'description'=>'A smartphone with 16gb ram and much more features',
                    'category'=>'Mobile',
                    'gallery'=>'https://consumer-img.huawei.com/content/dam/huawei-cbg-site/en/mkt/plp/new-phones/product-list/P30Pro_black.png'
                ],
                [
                    'name'=>'Refrigerator',
                    'price'=>'600',
                    'description'=>'A smart refrigerator and much more features',
                    'category'=>'Refrigerator',
                    'gallery'=>'https://www.junubee.com/wp-content/uploads/2020/09/213_litres_2_door_direct_cool_fridge_titan_silver_rf_257.jpeg'
                ]
            ]
        );
    }
}
