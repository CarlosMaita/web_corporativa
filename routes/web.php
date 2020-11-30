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
	$categories = Category::all();
    return view('home', compact('categories'));
});

//nosotros
Route::get('/nosotros', function () {
	$categories = Category::all();
    return view('nosotros', compact('categories'));
});
//contactanos
Route::get('/contacto', function () {
	$categories = Category::all();
    return view('contacto', compact('categories'));
});
//servicios
Route::get('/servicios', function () {
	$categories = Category::all();
    return view('servicios', compact('categories'));
});
//Vitrina
Route::get('/productos', function () {
	$products = Product::with(['category'])->orderBy('category_id')->get();
	$categories = Category::all();
    return view('vitrina', compact('products', 'categories'));
});
//Enviar información del fomulario
Route::post('/mail', 'SendMail')->name('mail');