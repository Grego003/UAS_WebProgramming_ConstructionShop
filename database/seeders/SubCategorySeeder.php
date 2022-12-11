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
                'sub_category' => "Kusen 3",
                'category_id' => '1'
            ],
            [
                'sub_category' => "Kusen 4",
                'category_id' => '1'
            ],
            [
                'sub_category' => "Jendela Casement",
                'category_id' => '1'
            ],
            [
                'sub_category' => "Sliding Jendela",
                'category_id' => '1'
            ],
            [
                'sub_category' => "Pintu Sliding",
                'category_id' => '1'
            ],
            [
                'sub_category' => "Bahan Pintu Lipat",
                'category_id' => '1'
            ],
            [
                'sub_category' => "Pintu Swing",
                'category_id' => '1'
            ],
            [
                'sub_category' => "Stopper Pintu",
                'category_id' => '1'
            ],
            [
                'sub_category' => "Kunci",
                'category_id' => '4'
            ],
            [
                'sub_category' => "Siku",
                'category_id' => '4'
            ],
            [
                'sub_category' => "Plat",
                'category_id' => '4'
            ],
            [
                'sub_category' => "Bracket",
                'category_id' => '4'
            ],
        ];

        SubCategory::insert($categories_data);
    }
}
