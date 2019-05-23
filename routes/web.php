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

//Ao acessar, se não estiver logado, sera direcionado para login
Route::get('/', 'EmporiumController@index')->middleware('auth');


//Rotas de login
Auth::routes();

Route::prefix('moderator')->group(function() {
    Auth::routes();
    Route::get('/{module?}', 'EmporiumController@index')->name('moderator');
//    Route::get('{module}', 'EmporiumController@index')->name('moderator');
});

//Rota da biblioteca passpost para controle da api (usuarios e acesso)
Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'empws'], function()
{
    Route::group(['prefix' => 'passports'], function()
    {
        Route::get('', 'EmporiumController@passports');

    });
});

//Rota padrao Laravel de home ( nao utilizada )
//Route::get('/home', 'HomeController@index')->name('home');


