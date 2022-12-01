<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::truncate();
        $created_date = '2022-12-01 02:53:26';

        $product_data = [
            /* --Kusen 3 */
            [
                'product_code' => "0428",
                'categories_id' => "1",
                'product_name' => 'Open Back Polos Kusen 3',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0429",
                'categories_id' => "1",
                'product_name' => 'M Polos Kusen 3',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0414",
                'categories_id' => "1",
                'product_name' => 'Z Motoran Polos Kusen 3',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0411",
                'categories_id' => "1",
                'product_name' => 'Tutup Rata Kusen 3',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0412",
                'categories_id' => "1",
                'product_name' => 'Tutup M Kusen 3',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0415",
                'categories_id' => "1",
                'product_name' => 'Tutup Z Kusen 3',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60428",
                'categories_id' => "1",
                'product_name' => 'Open Back Skrup Kusen 3',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60429",
                'categories_id' => "1",
                'product_name' => 'M Skrup Kusen 3',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60414",
                'categories_id' => "1",
                'product_name' => 'Z motoran Skrup Kusen 3',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            /* kusen 3-- */

            /* --Kusen 4 */
            [
                'product_code' => "0560",
                'categories_id' => "1",
                'product_name' => 'Open Back Polos Kusen 4',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0559",
                'categories_id' => "1",
                'product_name' => 'M Polos Kusen 4',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0558",
                'categories_id' => "1",
                'product_name' => 'Z Motoran Polos Kusen 4',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60560",
                'categories_id' => "1",
                'product_name' => 'Tutup Rata Kusen 4',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60559",
                'categories_id' => "1",
                'product_name' => 'Tutup M Kusen 4',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0561",
                'categories_id' => "1",
                'product_name' => 'Tutup Z Kusen 4',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0562",
                'categories_id' => "1",
                'product_name' => 'Open Back Skrup Kusen 4',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "60558",
                'categories_id' => "1",
                'product_name' => 'M Skrup Kusen 4',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0554",
                'categories_id' => "1",
                'product_name' => 'Z motoran Skrup Kusen 4',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            /* kusen 4-- */

            /* --Jendela Casement*/
            [
                'product_code' => "1825",
                'categories_id' => "2",
                'product_name' => 'Casement Gunung Jendela',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1826",
                'categories_id' => "2",
                'product_name' => 'Daun Casement Jendela',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1828",
                'categories_id' => "2",
                'product_name' => 'Glass Bead Jendela',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "1829",
                'categories_id' => "2",
                'product_name' => 'Stoper Kaki Jendela',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "8130",
                'categories_id' => "2",
                'product_name' => 'Stoper Rata Jendela',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            /* Jendela Casement-- */

            /* --Jendela Sliding */
            [
                'product_code' => "041",
                'categories_id' => "3",
                'product_name' => 'Rel Jendela Sliding Bawah ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "039",
                'categories_id' => "3",
                'product_name' => 'Tiang Jendela Sliding Samping double ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "040",
                'categories_id' => "3",
                'product_name' => 'Rel Jendela Sliding Atas ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "038",
                'categories_id' => "3",
                'product_name' => 'Ambang Jendela Sliding Atas ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "037",
                'categories_id' => "3",
                'product_name' => 'Ambang Jendela Sliding Bawah ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "035",
                'categories_id' => "3",
                'product_name' => 'Tiang Jendela Sliding Polos ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "036",
                'categories_id' => "3",
                'product_name' => 'Tiang Jendela Sliding Kait ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            /* Jendela Sliding-- */

            /* --Pintu Sliding */
            [
                'product_code' => "9054",
                'categories_id' => "4",
                'product_name' => 'Tiang Pintu Sliding Kait ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9055",
                'categories_id' => "4",
                'product_name' => 'Tiang Pintu Sliding Polos ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9056",
                'categories_id' => "4",
                'product_name' => 'Ambang Pintu Sliding Atas ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9058",
                'categories_id' => "4",
                'product_name' => 'Ambang Pintu Sliding Bawah ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9102",
                'categories_id' => "4",
                'product_name' => 'Rel Pintu Sliding Atas Double ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9103",
                'categories_id' => "4",
                'product_name' => 'Rel Pintu Sliding Bawah Double ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9104",
                'categories_id' => "4",
                'product_name' => 'Tiang Pintu Sliding Samping Double ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9108",
                'categories_id' => "4",
                'product_name' => 'Tiang Pintu Sliding Samping Single ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9105",
                'categories_id' => "4",
                'product_name' => 'Rel Pintu Sliding Atas Single ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "9106",
                'categories_id' => "4",
                'product_name' => 'Rel Pintu Sliding Bawah Single ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            /* Pintu Sliding-- */

            /* --Pintu Lipat  */
            [
                'product_code' => "0495",
                'categories_id' => "5",
                'product_name' => 'Ambang Bawah Pintu Lipat 8cm ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0492",
                'categories_id' => "5",
                'product_name' => 'Tiang + Kupingan Pintu Lipat 8cm',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0490",
                'categories_id' => "5",
                'product_name' => 'Tiang Polos 8cm ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0489",
                'categories_id' => "5",
                'product_name' => 'Tiang Polos 6cm ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "0491",
                'categories_id' => "5",
                'product_name' => 'Tiang + Kupingan Pintu Lipat 8cm ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            /* Pintu Lipat-- */

            /* --Pintu Swing  */
            [
                'product_code' => "2003",
                'categories_id' => "6",
                'product_name' => 'Glass Bead Pintu Swing',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "2000",
                'categories_id' => "6",
                'product_name' => 'Ambang Bawah Pintu Swing',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "2001",
                'categories_id' => "6",
                'product_name' => 'Tiang Moher Pintu Swing ',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "2002",
                'categories_id' => "6",
                'product_name' => 'Tiang Polos Pintu Swing',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "2005",
                'categories_id' => "6",
                'product_name' => 'Ambang Atas Pintu Swing',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "2398",
                'categories_id' => "6",
                'product_name' => 'Tiang Engsel Pintu Swing',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            /* Pintu Swing-- */

            /* --Pintu Stopper  */
            [
                'product_code' => "5565",
                'categories_id' => "7",
                'product_name' => 'Stopper Pintu 5cm',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_code' => "5564",
                'categories_id' => "7",
                'product_name' => 'Stopper Pintu 3.5cm',
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "",
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
            /* Pintu Stopper- */

        ];

        Products::insert($product_data);
    }
}
