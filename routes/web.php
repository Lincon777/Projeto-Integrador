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
// Route::get('/dadosempresa/{establishment_id}','App\Http\Controllers\EstablishmentController@show')->name('dadosempresa');
// Route::get('/dadosempresa/{establishment_id}','App\Http\Controllers\EstablishmentController@edit')->name('dadosempresa');
//
// Route::post('/establishment.update/{establishment_id}','App\Http\Controllers\EstablishmentController@update')->name('update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {
  Route::resource('user', App\Http\Controllers\UserController::class);

  Route::resource('product', App\Http\Controllers\ProductController::class);

  Route::resource('establishment', App\Http\Controllers\EstablishmentController::class);

  Route::resource('menu', App\Http\Controllers\MenuController::class);

  Route::resource('menu.product', App\Http\Controllers\MenuProductController::class)
  ->only(['store', 'destroy']);
});
  Route::get('/cardapio/{menu}','App\Http\Controllers\MenuController@showPublic')->name('menu.public.show');
