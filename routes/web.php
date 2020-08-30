<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Frontend.home');
});

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    
});