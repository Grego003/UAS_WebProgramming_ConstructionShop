<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductColors;
use Carbon\Carbon;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductColors::truncate();
        $created_date = '2022-12-01 02:53:26';

        $colors_data = [
            [
                'color_name' => 'Artic White Brown',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'color_name' => 'Black',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'color_name' => 'CA',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'color_name' => 'Urat Kayu Ebony',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        ProductColors::insert($colors_data);
    }
}
