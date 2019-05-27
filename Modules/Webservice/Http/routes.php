<?php

//Route::group(['middleware' => 'auth:api', 'prefix' => 'empws', 'namespace' => 'Modules\Webservice\Http\Controllers'], function()
Route::group(
    [
        'middleware' => 'api',
        'prefix' => 'empws',
        'namespace' => 'Modules\Webservice\Http\Controllers',
        'name' => 'emporium-ws'
    ], function()
{
    Route::group(['prefix' => 'ticket', 'name' => 'Tickets'], function()
    {
        Route::post('/date', 'Upload\TicketsController@getTicketStoreDate')->name('getTicketDate');

    });

//    Route::group(['prefix' => 'docs'], function()
//    {
//        Route::get('', 'WebserviceController@index')->name('api-doc');
//
//    });
});
