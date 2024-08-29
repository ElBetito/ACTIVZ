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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/agenda-tu-cita', 'ViewsController@agenda')->name('agenda');
Route::get('/conocenos', 'ViewsController@conocenos')->name('conocenos');
Route::get('/contacto', 'ViewsController@contacto')->name('contacto');
Route::get('/idioma', 'ViewsController@idioma')->name('idioma');

Route::get('/api/data', 'ApiController@Api');
Route::get('/api/data-carousel', 'ApiController@ApiCarousel');

//productos
Route::get('/product-details/{data}', 'ProductosController@details')->name('productos.details');