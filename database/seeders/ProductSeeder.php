<?php

namespace Database\Seeders;

use App\Models\Product;
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
                'product_name' => ' Kusen Open Back Polos',
                'code' => "0428",
                'sub_category_id' => "1",
                'length' => "6",
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "https://pixabay.com/get/g1c7291a41997f22ac9ec162f74e44bd4ef15864079b57e61edc03f8c20a9d9077f96e7e355531c8fb4597cf7ba15c4b796468e3c2521dc0c580b18c66c1f4531_640.jpg",
                'category_id' => "1",
                'stock' => '50',
                'description' => '',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Kusen M Polos',
                'code' => "0559",
                'sub_category_id' => "1",
                'length' => "6",
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "https://pixabay.com/get/g1c7291a41997f22ac9ec162f74e44bd4ef15864079b57e61edc03f8c20a9d9077f96e7e355531c8fb4597cf7ba15c4b796468e3c2521dc0c580b18c66c1f4531_640.jpg",
                'category_id' => "1",
                'stock' => '50',
                'description' => '',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Casement Gunung',
                'code' => "1825",
                'sub_category_id' => "2",
                'length' => "6",
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "https://pixabay.com/get/g1c7291a41997f22ac9ec162f74e44bd4ef15864079b57e61edc03f8c20a9d9077f96e7e355531c8fb4597cf7ba15c4b796468e3c2521dc0c580b18c66c1f4531_640.jpg",
                'category_id' => "2",
                'stock' => '50',
                'description' => '',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'test',
                'code' => "1825",
                'sub_category_id' => "3",
                'length' => "6",
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "https://pixabay.com/get/g1c7291a41997f22ac9ec162f74e44bd4ef15864079b57e61edc03f8c20a9d9077f96e7e355531c8fb4597cf7ba15c4b796468e3c2521dc0c580b18c66c1f4531_640.jpg",
                'category_id' => "4",
                'stock' => '50',
                'description' => '',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'test 2',
                'code' => "1825",
                'sub_category_id' => "1",
                'length' => "6",
                'link_tokopedia' => "",
                'link_shopee' => "",
                'src_img' => "https://pixabay.com/get/g1c7291a41997f22ac9ec162f74e44bd4ef15864079b57e61edc03f8c20a9d9077f96e7e355531c8fb4597cf7ba15c4b796468e3c2521dc0c580b18c66c1f4531_640.jpg",
                'category_id' => "2",
                'stock' => '50',
                'description' => '',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Kunci rolling door',
                'code' => "NaN",
                'sub_category_id' => "6",
                'length' => "6",
                'link_tokopedia' => "https://www.tokopedia.com/rpleeman/kunci-rolling-door?extParam=whid%3D14729194",
                'link_shopee' => "",
                'src_img' => "https://images.tokopedia.net/img/cache/900/VqbcmM/2022/12/3/8e37f03e-9322-4488-a7d1-33116fbf5b30.jpg",
                'category_id' => "4",
                'stock' => '10',
                'description' => 'Kunci Rollingdoor untuk pintu besi maupun aluminium
                Harga per set sudah termasuk anak kunci 2 pcs
                Kami sudah mencoba sebelum pengiriman, jadi pasti bagus.',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Siku Segitiga Pelindung Sudut Meja/Box',
                'code' => "NaN",
                'sub_category_id' => "7",
                'length' => "6",
                'link_tokopedia' => "https://www.tokopedia.com/rpleeman/siku-segitiga-pelindung-sudut-meja-box?extParam=whid%3D14729194",
                'link_shopee' => "",
                'src_img' => "https://images.tokopedia.net/img/cache/900/VqbcmM/2022/12/3/5074b033-c919-47b1-905c-479670f01a07.jpg",
                'category_id' => "4",
                'stock' => '75',
                'description' => 'Siku Pelindung Sudut Meja/Box
                Ukuran 2.8cmx28cmx28cm
                bahan Besi Crome
                harga per buah',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Plat Gantungan Bingkai dan Papan Tulis',
                'code' => "NaN",
                'sub_category_id' => "8",
                'length' => "6",
                'link_tokopedia' => "https://www.tokopedia.com/rpleeman/plat-gantungan-bingkai-dan-papan-tulis?extParam=whid%3D14729194",
                'link_shopee' => "",
                'src_img' => "https://images.tokopedia.net/img/cache/900/VqbcmM/2022/12/3/be2278b7-3cd5-48f7-80c3-c59bf1548fc2.jpg",
                'category_id' => "4",
                'stock' => '100',
                'description' => 'Plat untuk gantungan figura, lukisan, papan tulis dll
                Ukuran 6cmx2.5cm
                Bahan Besi Crome
                minimum pembelian 4pcs',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Plat Klem Penjepit Kaca Z',
                'code' => "NaN",
                'sub_category_id' => "8",
                'length' => "6",
                'link_tokopedia' => "https://www.tokopedia.com/rpleeman/plat-klem-penjepit-kaca-z?extParam=whid%3D14729194",
                'link_shopee' => "",
                'src_img' => "https://images.tokopedia.net/img/cache/900/VqbcmM/2022/12/2/db4aabb7-5a12-4712-897b-d67d11f4b76a.jpg",
                'category_id' => "4",
                'stock' => '200',
                'description' => 'Plat Klem Penjepit Z.
                Bahan Besi Crome
                minimum pembelian 4pcs',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bracket Cermin Dinding Washtafel',
                'code' => "NaN",
                'sub_category_id' => "9",
                'length' => "6",
                'link_tokopedia' => "https://www.tokopedia.com/rpleeman/bracket-cermin-dinding-washtafel?extParam=whid%3D14729194",
                'link_shopee' => "",
                'src_img' => "https://images.tokopedia.net/img/cache/900/VqbcmM/2022/12/2/c4e2b90b-c7c2-423e-90a9-4f4426554df1.jpg",
                'category_id' => "4",
                'stock' => '30',
                'description' => 'Material : Stainless
                Harga per set meliputi 4 buah bracket termasuk karet pengaman kaca',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Siku Sudut Besi Pelindung',
                'code' => "NaN",
                'sub_category_id' => "7",
                'length' => "6",
                'link_tokopedia' => "https://www.tokopedia.com/rpleeman/siku-sudut-besi-pelindung?extParam=whid%3D14729194",
                'link_shopee' => "",
                'src_img' => "https://images.tokopedia.net/img/cache/900/VqbcmM/2022/12/2/ceea743d-17c6-41c1-b547-4aec859e8a8d.jpg",
                'category_id' => "4",
                'stock' => '60',
                'description' => 'Siku Sudut Pengaman Furniture
                Ukuran 32mmx32mmx10mm
                Bahan Besi Crome
                Minimum pemesanan 4 buah
                harga per buah',
                'created_at' =>  $created_date,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ];

        Product::insert($product_data);
    }
}


// class OldProductSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         Products::truncate();
//         $created_date = '2022-12-01 02:53:26';

//         $product_data = [
//             /* --Kusen 3 */
//             [
//                 'product_code' => "0428",
//                 'categories_id' => "1",
//                 'product_name' => 'Open Back Polos Kusen 3',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0429",
//                 'categories_id' => "1",
//                 'product_name' => 'M Polos Kusen 3',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0414",
//                 'categories_id' => "1",
//                 'product_name' => 'Z Motoran Polos Kusen 3',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0411",
//                 'categories_id' => "1",
//                 'product_name' => 'Tutup Rata Kusen 3',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0412",
//                 'categories_id' => "1",
//                 'product_name' => 'Tutup M Kusen 3',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0415",
//                 'categories_id' => "1",
//                 'product_name' => 'Tutup Z Kusen 3',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "60428",
//                 'categories_id' => "1",
//                 'product_name' => 'Open Back Skrup Kusen 3',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "60429",
//                 'categories_id' => "1",
//                 'product_name' => 'M Skrup Kusen 3',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "60414",
//                 'categories_id' => "1",
//                 'product_name' => 'Z motoran Skrup Kusen 3',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             /* kusen 3-- */

//             /* --Kusen 4 */
//             [
//                 'product_code' => "0560",
//                 'categories_id' => "1",
//                 'product_name' => 'Open Back Polos Kusen 4',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0559",
//                 'categories_id' => "1",
//                 'product_name' => 'M Polos Kusen 4',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0558",
//                 'categories_id' => "1",
//                 'product_name' => 'Z Motoran Polos Kusen 4',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "60560",
//                 'categories_id' => "1",
//                 'product_name' => 'Tutup Rata Kusen 4',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "60559",
//                 'categories_id' => "1",
//                 'product_name' => 'Tutup M Kusen 4',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0561",
//                 'categories_id' => "1",
//                 'product_name' => 'Tutup Z Kusen 4',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0562",
//                 'categories_id' => "1",
//                 'product_name' => 'Open Back Skrup Kusen 4',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "60558",
//                 'categories_id' => "1",
//                 'product_name' => 'M Skrup Kusen 4',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0554",
//                 'categories_id' => "1",
//                 'product_name' => 'Z motoran Skrup Kusen 4',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             /* kusen 4-- */

//             /* --Jendela Casement*/
//             [
//                 'product_code' => "1825",
//                 'categories_id' => "2",
//                 'product_name' => 'Casement Gunung Jendela',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "1826",
//                 'categories_id' => "2",
//                 'product_name' => 'Daun Casement Jendela',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "1828",
//                 'categories_id' => "2",
//                 'product_name' => 'Glass Bead Jendela',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "1829",
//                 'categories_id' => "2",
//                 'product_name' => 'Stoper Kaki Jendela',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "8130",
//                 'categories_id' => "2",
//                 'product_name' => 'Stoper Rata Jendela',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             /* Jendela Casement-- */

//             /* --Jendela Sliding */
//             [
//                 'product_code' => "041",
//                 'categories_id' => "3",
//                 'product_name' => 'Rel Jendela Sliding Bawah ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "039",
//                 'categories_id' => "3",
//                 'product_name' => 'Tiang Jendela Sliding Samping double ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "040",
//                 'categories_id' => "3",
//                 'product_name' => 'Rel Jendela Sliding Atas ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "038",
//                 'categories_id' => "3",
//                 'product_name' => 'Ambang Jendela Sliding Atas ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "037",
//                 'categories_id' => "3",
//                 'product_name' => 'Ambang Jendela Sliding Bawah ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "035",
//                 'categories_id' => "3",
//                 'product_name' => 'Tiang Jendela Sliding Polos ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "036",
//                 'categories_id' => "3",
//                 'product_name' => 'Tiang Jendela Sliding Kait ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             /* Jendela Sliding-- */

//             /* --Pintu Sliding */
//             [
//                 'product_code' => "9054",
//                 'categories_id' => "4",
//                 'product_name' => 'Tiang Pintu Sliding Kait ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "9055",
//                 'categories_id' => "4",
//                 'product_name' => 'Tiang Pintu Sliding Polos ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "9056",
//                 'categories_id' => "4",
//                 'product_name' => 'Ambang Pintu Sliding Atas ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "9058",
//                 'categories_id' => "4",
//                 'product_name' => 'Ambang Pintu Sliding Bawah ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "9102",
//                 'categories_id' => "4",
//                 'product_name' => 'Rel Pintu Sliding Atas Double ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "9103",
//                 'categories_id' => "4",
//                 'product_name' => 'Rel Pintu Sliding Bawah Double ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "9104",
//                 'categories_id' => "4",
//                 'product_name' => 'Tiang Pintu Sliding Samping Double ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "9108",
//                 'categories_id' => "4",
//                 'product_name' => 'Tiang Pintu Sliding Samping Single ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "9105",
//                 'categories_id' => "4",
//                 'product_name' => 'Rel Pintu Sliding Atas Single ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "9106",
//                 'categories_id' => "4",
//                 'product_name' => 'Rel Pintu Sliding Bawah Single ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             /* Pintu Sliding-- */

//             /* --Pintu Lipat  */
//             [
//                 'product_code' => "0495",
//                 'categories_id' => "5",
//                 'product_name' => 'Ambang Bawah Pintu Lipat 8cm ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0492",
//                 'categories_id' => "5",
//                 'product_name' => 'Tiang + Kupingan Pintu Lipat 8cm',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0490",
//                 'categories_id' => "5",
//                 'product_name' => 'Tiang Polos 8cm ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0489",
//                 'categories_id' => "5",
//                 'product_name' => 'Tiang Polos 6cm ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "0491",
//                 'categories_id' => "5",
//                 'product_name' => 'Tiang + Kupingan Pintu Lipat 8cm ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             /* Pintu Lipat-- */

//             /* --Pintu Swing  */
//             [
//                 'product_code' => "2003",
//                 'categories_id' => "6",
//                 'product_name' => 'Glass Bead Pintu Swing',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "2000",
//                 'categories_id' => "6",
//                 'product_name' => 'Ambang Bawah Pintu Swing',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "2001",
//                 'categories_id' => "6",
//                 'product_name' => 'Tiang Moher Pintu Swing ',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "2002",
//                 'categories_id' => "6",
//                 'product_name' => 'Tiang Polos Pintu Swing',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "2005",
//                 'categories_id' => "6",
//                 'product_name' => 'Ambang Atas Pintu Swing',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "2398",
//                 'categories_id' => "6",
//                 'product_name' => 'Tiang Engsel Pintu Swing',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             /* Pintu Swing-- */

//             /* --Pintu Stopper  */
//             [
//                 'product_code' => "5565",
//                 'categories_id' => "7",
//                 'product_name' => 'Stopper Pintu 5cm',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ],
//             [
//                 'product_code' => "5564",
//                 'categories_id' => "7",
//                 'product_name' => 'Stopper Pintu 3.5cm',
//                 'link_tokopedia' => "",
//                 'link_shopee' => "",
//                 'src_img' => "",
//                 'created_at' =>  $created_date,
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ]
//             /* Pintu Stopper- */

//         ];

//         Products::insert($product_data);
//     }
// }
