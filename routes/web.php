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

//Ao acessar, se não estiver logadd, sera direcionado para login
Route::get('/', function () {
    return view('layouts.emporium.main');
})->middleware('auth');

//Rotas de login
Auth::routes();

//Rota padrao Laravel de home ( nao utilizada )
//Route::get('/home', 'HomeController@index')->name('home');


