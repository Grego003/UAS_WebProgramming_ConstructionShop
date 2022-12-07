<?php

use App\Models\User;
use App\Models\Review;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;

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


Route::get('/', function () {
    return redirect('/dashboard');
});


Route::get('/admin/login/{name}/send', function ($name) {
    $login = User::where('name', $name)->get();
    return view('demo');
});
Route::get('/dashboard', function () {
    $reviews = Review::limit(3)->orderBy('id', 'desc')->get();
    return view('demo', ['reviews' => $reviews]);
});

Route::post('review', [ReviewController::class, 'store']);
Route::delete('review/{id}', [ReviewController::class, 'destroy']);

Route::resource('stores', StoreController::class);

Route::get('/about', function () {
    return view('about');
});

Route::get('/catalog', function () {
    return view('catalog');
});


Route::get('products/{categoryID}', [StoreController::class, 'index']);
Route::get('products/sub/{categoryID}', [StoreController::class, 'index_sub']);
Route::resources([
    'products' => ProductController::class,
    'stores' => StoreController::class
]);

require __DIR__ . '/auth.php';
