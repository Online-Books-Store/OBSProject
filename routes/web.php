<?php

use Illuminate\Support\Facades\Route;


// Frontend Route

Route::get('/','PageController@index');
Route::get('/userlogin','PageController@login');
Route::get('/userregister','PageController@register');


//=====================================================



// Backend Route

Route::get('/home',function(){
    return view('home');
});

Route::get('admin/dashboard', function () {
    return view('Backend/admin/layouts/master');
});

Route::group(['prefix' =>'admin/dashboard'],function(){
    Route::get('/post','Admin\PostController@index');
    Route::get('/post/create','Admin\PostController@create');
    Route::post('/post/create','Admin\PostController@store');
    Route::get('/post/{id}','Admin\PostController@show');
    Route::get('/post/{id}/edit','Admin\PostController@edit');
    Route::post('/post/{id}/edit','Admin\PostController@update');
    Route::get('/post/{id}/delete','Admin\PostController@destroy');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    
});

