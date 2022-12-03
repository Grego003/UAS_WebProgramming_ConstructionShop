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
                'sub_category' => "Kusen"
            ],
            [
                'sub_category' => "Jendela Casement"
            ],
            [
                'sub_category' => "Jendela Sliding"
            ],
            [
                'sub_category' => "Pintu Sliding"
            ],
            [
                'sub_category' => "Pintu Lipat"
            ],
            [
                'sub_category' => "Pintu Stopper"
            ],
        ];

        SubCategory::insert($categories_data);
    }
}
