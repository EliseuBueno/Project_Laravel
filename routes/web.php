<?php

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
    $x = 5;
    $y = 6;
    $z = $x + $y;
    $arrDados = ['Eliseu', 'Maíra', 'Hillary', 'Lorena'];
    return view('welcome', [
        'x' => $x, 
        'y' => $y, 
        'z' => $z, 
        'arrDados' => $arrDados
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});