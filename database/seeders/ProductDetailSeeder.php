<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductDetails;
use Illuminate\Support\Carbon;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductDetails::truncate();
        $created_date = '2022-12-01 02:53:26';

        $product_detail_data = [
            /* --Kusen 3 */
            [
                'product_code' => "0428",
                'color_id' => '1',
                'price' => 258120,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0428",
                'color_id' => '2',
                'price' => 263856,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0428",
                'color_id' => '3',
                'price' => 240912,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0428",
                'color_id' => '4',
                'price' => 398652,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0429",
                'color_id' => '1',
                'price' => 312660,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0429",
                'color_id' => '2',
                'price' => 319608,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0429",
                'color_id' => '3',
                'price' => 291816,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0429",
                'color_id' => '4',
                'price' => 482886,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0414",
                'color_id' => '1',
                'price' => 279180,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0414",
                'color_id' => '2',
                'price' => 319608,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0414",
                'color_id' => '3',
                'price' => 260568,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0414",
                'color_id' => '4',
                'price' => 431178,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0411",
                'color_id' => '1',
                'price' => 98280,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0411",
                'color_id' => '2',
                'price' => 100464,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0411",
                'color_id' => '3',
                'price' => 91728,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0411",
                'color_id' => '4',
                'price' => 151788,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0412",
                'color_id' => '1',
                'price' => 152820,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0412",
                'color_id' => '2',
                'price' => 156216,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0412",
                'color_id' => '3',
                'price' => 142632,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0412",
                'color_id' => '4',
                'price' => 236022,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0415",
                'color_id' => '1',
                'price' => 108000,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0415",
                'color_id' => '2',
                'price' => 110400,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0415",
                'color_id' => '3',
                'price' => 100800,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0415",
                'color_id' => '4',
                'price' => 166800,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60428",
                'color_id' => '1',
                'price' => 285660,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60428",
                'color_id' => '2',
                'price' => 292008,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60428",
                'color_id' => '3',
                'price' => 266616,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60428",
                'color_id' => '4',
                'price' => 441186,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60429",
                'color_id' => '1',
                'price' => 340200,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60429",
                'color_id' => '2',
                'price' => 347760,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60429",
                'color_id' => '3',
                'price' => 317520,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60429",
                'color_id' => '4',
                'price' => 525420,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60414",
                'color_id' => '1',
                'price' => 306720,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60414",
                'color_id' => '2',
                'price' => 313536,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60414",
                'color_id' => '3',
                'price' => 286272,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60414",
                'color_id' => '4',
                'price' => 473712,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            /* kusen 3-- */

            /* --Kusen 4 */
            [
                'product_code' => "0560",
                'color_id' => '1',
                'price' => 328320,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0560",
                'color_id' => '2',
                'price' => 335616,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0560",
                'color_id' => '3',
                'price' => 306432,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0560",
                'color_id' => '4',
                'price' => 507072,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0559",
                'color_id' => '1',
                'price' => 383940,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0559",
                'color_id' => '2',
                'price' => 392472,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0559",
                'color_id' => '3',
                'price' => 358344,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0559",
                'color_id' => '4',
                'price' => 592974,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0558",
                'color_id' => '1',
                'price' => 356940,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0558",
                'color_id' => '2',
                'price' => 364872,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0558",
                'color_id' => '3',
                'price' => 333144,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0558",
                'color_id' => '4',
                'price' => 551274,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60560",
                'price' => 358560,
                'color_id' => '1',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60560",
                'price' => 366528,
                'color_id' => '2',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60560",
                'price' => 334656,
                'color_id' => '3',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60560",
                'price' => 553776,
                'color_id' => '4',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60559",
                'color_id' => '1',
                'price' => 413640,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60559",
                'color_id' => '2',
                'price' => 422832,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60559",
                'color_id' => '3',
                'price' => 386064,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60559",
                'color_id' => '4',
                'price' => 638844,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            /*CHECKPOINT ISTIRAHAT 2 JAM*/
            [
                'product_code' => "0561",
                'color_id' => '1',
                'price' => 130140,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0561",
                'color_id' => '2',
                'price' => 133032,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0561",
                'color_id' => '3',
                'price' => 121464,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0561",
                'color_id' => '4',
                'price' => 200994,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0562",
                'price' => 185760,
                'color_id' => '1',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0562",
                'price' => 189888,
                'color_id' => '2',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0562",
                'price' => 173376,
                'color_id' => '3',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0562",
                'price' => 286896,
                'color_id' => '4',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60558",
                'color_id' => '1',
                'price' => 387180,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60558",
                'color_id' => '2',
                'price' => 395784,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60558",
                'color_id' => '3',
                'price' => 361368,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60558",
                'color_id' => '4',
                'price' => 597978,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0554",
                'color_id' => '1',
                'price' => 132300,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0554",
                'color_id' => '2',
                'price' => 135240,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0554",
                'color_id' => '3',
                'price' => 123480,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0554",
                'color_id' => '4',
                'price' => 204330,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            /* kusen 4-- */

            /* --Jendela Casement */
            [
                'product_code' => "1825",
                'color_id' => '1',
                'price' => 246780,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1825",
                'color_id' => '2',
                'price' => 252264,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1825",
                'color_id' => '3',
                'price' => 230328,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1825",
                'color_id' => '4',
                'price' => 381138,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1826",
                'color_id' => '1',
                'price' => 235980,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1826",
                'color_id' => '2',
                'price' => 241224,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1826",
                'color_id' => '3',
                'price' => 220248,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1826",
                'color_id' => '4',
                'price' => 364458,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1828",
                'color_id' => '1',
                'price' => 100980,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1828",
                'color_id' => '2',
                'price' => 103224,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1828",
                'color_id' => '3',
                'price' => 94248,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1828",
                'color_id' => '4',
                'price' => 155958,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1829",
                'color_id' => '1',
                'price' => 176580,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1829",
                'color_id' => '2',
                'price' => 180504,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1829",
                'color_id' => '3',
                'price' => 164808,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1829",
                'color_id' => '4',
                'price' => 272718,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "8130",
                'color_id' => '1',
                'price' => 120420,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "8130",
                'color_id' => '2',
                'price' => 123096,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "8130",
                'color_id' => '3',
                'price' => 112392,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "8130",
                'color_id' => '4',
                'price' => 185982,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            /* Jendela Casement-- */

            /* --Jendela Sliding */
            [
                'product_code' => "041",
                'color_id' => '1',
                'price' => 187920,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "041",
                'color_id' => '2',
                'price' => 192096,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "041",
                'color_id' => '3',
                'price' => 175392,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "041",
                'color_id' => '4',
                'price' => 290232,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "039",
                'color_id' => '1',
                'price' => 171180,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "039",
                'color_id' => '2',
                'price' => 174984,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "039",
                'color_id' => '3',
                'price' => 159768,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "039",
                'color_id' => '4',
                'price' => 264378,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "040",
                'color_id' => '1',
                'price' => 239220,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "040",
                'color_id' => '2',
                'price' => 244536,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "040",
                'color_id' => '3',
                'price' => 223272,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "040",
                'color_id' => '4',
                'price' => 369462,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "038",
                'color_id' => '1',
                'price' => 139860,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "038",
                'color_id' => '2',
                'price' => 142968,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "038",
                'color_id' => '3',
                'price' => 130536,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "038",
                'color_id' => '4',
                'price' => 216006,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "037",
                'color_id' => '1',
                'price' => 190620,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "037",
                'color_id' => '2',
                'price' => 194856,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "037",
                'color_id' => '3',
                'price' => 177912,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "037",
                'color_id' => '4',
                'price' => 294402,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "035",
                'color_id' => '1',
                'price' => 141480,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "035",
                'color_id' => '2',
                'price' => 144624,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "035",
                'color_id' => '3',
                'price' => 132048,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "035",
                'color_id' => '4',
                'price' => 218508,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "036",
                'color_id' => '1',
                'price' => 172260,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "036",
                'color_id' => '2',
                'price' => 176088,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "036",
                'color_id' => '3',
                'price' => 160776,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "036",
                'color_id' => '4',
                'price' => 266046,
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            /* Jendela Sliding-- */

            /* --Pintu Sliding */
            [
                'product_code' => "9054",
                'created_at' =>  $created_date,
                'color_id' => '1',
                'price' => 259200,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9054",
                'created_at' =>  $created_date,
                'color_id' => '2',
                'price' => 264960,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9054",
                'created_at' =>  $created_date,
                'color_id' => '3',
                'price' => 241920,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9054",
                'created_at' =>  $created_date,
                'color_id' => '4',
                'price' => 400320,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9055",
                'created_at' =>  $created_date,
                'color_id' => '1',
                'price' => 199260,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9055",
                'created_at' =>  $created_date,
                'color_id' => '2',
                'price' => 203688,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9055",
                'created_at' =>  $created_date,
                'color_id' => '3',
                'price' => 243432,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9055",
                'created_at' =>  $created_date,
                'color_id' => '4',
                'price' => 402822,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]

            /*berhenti di Pintu Sliding Product Code 9055 :)))))))))))*/

        ];

        ProductDetails::insert($product_detail_data);
    }
}
