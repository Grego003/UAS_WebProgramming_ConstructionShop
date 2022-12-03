<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Products;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        $created_date = '2022-12-01 02:53:26';

        $product_data = [
            /* --Kusen 3 */
            [
                'product_name' => 'Open Back Polos',
                'code' => "0428",
                'sub_category' => "Kusen 3",
                'length' => "6",
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'category_id' => "1",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'M Polos',
                'code' => "0559",
                'sub_category' => "Kusen 4",
                'length' => "6",
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'category_id' => "1",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Casement Gunung',
                'code' => "1825",
                'sub_category' => "Kaca",
                'length' => "6",
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'category_id' => "2",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]

        ];

        Product::insert($product_data);
    }
}
