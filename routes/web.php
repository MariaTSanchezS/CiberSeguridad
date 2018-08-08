<?php


Route::get('/','TestController@welcome');

Route::get('/prueba', function () {
	
	
    return ('holaaa');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
