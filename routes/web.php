<?php

use App\Http\Controllers\ProductController;
use App\Models\Products;
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

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('demo');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('products/{categoryID}', 'App\Http\Controllers\ProductController@index');

Route::resources([
    'products' => ProductController::class,
]);

require __DIR__ . '/auth.php';
