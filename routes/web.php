<?php

use App\Http\Controllers\StoreController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/check/{id}', function ($id) {
    $product = Product::find($id);
    // $test = '';
    // foreach ($product->color as $color) {
    //     $test .= $color->color_name . "<br/>";
    // }
    return $product->color->color_name;
});

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('demo');
});

Route::resource('stores', StoreController::class);

require __DIR__ . '/auth.php';
