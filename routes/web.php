<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
//use App\Models\Produto;
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

//Route::get('/', function () {
//    return view('products', ['produtos' => Produto::all()]);
//});

Route::get('/', function () {
    return view('products', [ProdutosController::class, 'index']);
});

