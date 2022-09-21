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
    return view('welcome');
});
Route::get('/pedidos', function () {
    return view('pedidos');
})->name ('pedidos');
Route::get('/cadastroemp', function () {
    return view('cadastroemp');
})->name ('cadastroemp');
Route::get('/cadastrofunc', function () {
    return view('cadastrofunc');
});
Route::get('/cardapio', function () {
    return view('cardapio');
})->name ('cardapio');
Route::get('/cardapios', function () {
    return view('cardapios');
})->name ('cardapios');
Route::get('/criarproduto', function () {
    return view('criarproduto');
});
Route::get('/dadosempresa', function () {
    return view('dadosempresa');
})->name ('dadosempresa');
Route::get('/editarcardapio', function () {
    return view('editarcardapio');
});
// Route::get('/login2', function () {
//     return view('login2');
// })->name ('login2');
// Route::get('/produtos', function () {
//     return view('produtos');
// })->name ('produtos');
Route::get('/telainicial', function () {
    return view('telainicial');
});
Route::get('/teste', function () {
    return view('teste');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {
  Route::resource('user', App\Http\Controllers\UserController::class);
});
Route::middleware('auth')->group(function() {
  Route::resource('product', App\Http\Controllers\ProductController::class);
});
