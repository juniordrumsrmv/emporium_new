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
    Route::group(['prefix' => 'ticket'], function()
    {
        Route::post('', 'Upload\TicketsController@getTicketStoreByDate')->name('getTicket');

    });

    Route::group(['prefix' => 'docs'], function()
    {
        Route::get('', 'WebserviceController@index')->name('api-doc');

    });
});
