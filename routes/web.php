<?php

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

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/entrenamiento', function () {
    return view('entrenamiento');
});

Route::get('/faqs', function () {
    return view('faqs');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('cursos', 'CursoController');
