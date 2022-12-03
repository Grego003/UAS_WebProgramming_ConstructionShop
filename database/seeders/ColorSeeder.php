<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;
use Carbon\Carbon;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::truncate();

        $colors_data = [
            [
                'color_name' => 'Artic White Brown',
            ],
            [
                'color_name' => 'Black',
            ],
            [
                'color_name' => 'CA',
            ],
            [
                'color_name' => 'Urat Kayu Ebony',
            ]
        ];

        Color::insert($colors_data);
    }
}
