<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::resource('/produtos', ProdutosController::class);

Route::get('/cadastro', function () {
    return view('register');
});