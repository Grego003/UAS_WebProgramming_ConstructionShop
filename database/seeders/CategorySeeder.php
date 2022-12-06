<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Category;
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
        Category::truncate();
        $created_date = '2022-12-01 02:53:26';

        $categories_data = [
            [
                'category_name' => "Aluminium"
            ],
            [
                'category_name' => "Kaca"
            ],
            [
                'category_name' => "Stainless"
            ],
            [
                'category_name' => "Aksesoris"
            ]

        ];

        Category::insert($categories_data);
    }
}
