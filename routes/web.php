<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'indexController@index')->name('inicio');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('blog', 'blogController');

//Route::get('/crearBlog/create', 'blog\blogController@create');
//Route::get('/crearBlog/(blog)', 'blog\blogController@show');
//Route::post('/crearBlog', 'blog\blogController@store');
//Route::get('/crearBlog/{blog}/edit','blog\blogController@edit');
//Route::get('/crearBlog/{blog}', 'blog\blogController@update');
Route::resource('/crearBlog', 'blog\blogController');

//Route::post('/crearBlog', function () {
    //Blog::create([
        //'titulo' => 'Titulo de la nota creada desde la ruta',
        //'descripcion' => 'Contenido de la nota creada desde la ruta',
    //]);
//})->name('/crearBlog.store');
