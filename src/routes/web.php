<?php

Route::group(['namespace' => 'Ultron\Contact\Http\Controllers'], function () {

    Route::get('contact', 'ContactController@index')->name('contact.index');
    Route::post('contact', 'ContactController@send')->name('contact.send');

});