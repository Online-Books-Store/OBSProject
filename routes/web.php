<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Frontend.home');
});

Auth::routes();

// <<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PageController@index')->name('page');

// =======
Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    
});
//  44bcd933c665f51ce79e773002fdd922ed20c9b9
