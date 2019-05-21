<?php

Route::group(['middleware' => 'auth:api', 'prefix' => 'empws', 'namespace' => 'Modules\Webservice\Http\Controllers'], function()
{
    Route::group(['prefix' => 'ticket'], function()
    {
        Route::post('', 'Upload\TicketsController@getTicket');

    });

    Route::group(['prefix' => 'docs'], function()
    {
        Route::get('', 'WebserviceController@index');

    });
});

//Route::any('{catchall}', function() {
//    dd('adahduahdaudhaudhada');
//})->where('catchall', '.*');