<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use App\Category;
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

// home
Route::get('/', function () {
    return view('home');
});

//nosotros
Route::get('/nosotros', function () {
    return view('nosotros');
});
//contactanos
Route::get('/contacto', function () {
    return view('contacto');
});
//servicios
Route::get('/servicios', function () {
    return view('servicios');
});
//Vitrina
Route::get('/productos', function () {
	$products = Product::with(['category'])->get();
	$categories = Category::all();
    return view('vitrina', compact('products', 'categories'));
});