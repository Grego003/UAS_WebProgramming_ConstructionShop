<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::truncate();
        $created_date = '2022-12-01 02:53:26';

        $categories_data = [
            [
                'sub_category' => "Kusen 3"
            ],
            [
                'sub_category' => "Kusen 4"
            ],
            [
                'sub_category' => "Jendela Casement"
            ],
            [
                'sub_category' => "Pintu Sliding"
            ],
            [
                'sub_category' => "Bahan Pintu Lipat"
            ],
            [
                'sub_category' => "Pinyu Swing"
            ],
            [
                'sub_category' => "Stopper Pintu"
            ]

        ];

        SubCategory::insert($categories_data);
    }
}
