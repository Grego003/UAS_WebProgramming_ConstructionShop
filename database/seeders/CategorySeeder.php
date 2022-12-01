<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Categories;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::truncate();
        $created_date = '2022-12-01 02:53:26';

        $categories_data = [
            [
                'category_name' => "Kusen",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_name' => "Jendela Casement",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_name' => "Jendela Sliding",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_name' => "Pintu Sliding",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_name' => "Pintu Lipat",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_name' => "Pintu Swing",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_name' => "Stopper Pintu",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        Categories::insert($categories_data);
    }
}
