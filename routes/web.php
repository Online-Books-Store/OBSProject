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

// Post Route
Route::group(['prefix' =>'admin/dashboard'],function(){
    Route::get('/post','Admin\PostController@index');
    Route::get('/post/create','Admin\PostController@create');
    Route::post('/post/create','Admin\PostController@store');
    Route::get('/post/{id}','Admin\PostController@show');
    Route::get('/post/{id}/edit','Admin\PostController@edit');
    Route::post('/post/{id}/edit','Admin\PostController@update');
    Route::get('/post/{id}/delete','Admin\PostController@destroy');
});

// Author Route
Route::group(['prefix'=>'admin/dashboard'],function(){
    Route::get('/author','Admin\AuthorController@index');
    Route::get('/author/create','Admin\AuthorController@create');
    Route::post('/author/create','Admin\AuthorController@store');
    Route::get('/author/{id}/edit','Admin\AuthorController@edit');
    Route::post('/author/{id}/edit','Admin\AuthorController@update');
    Route::get('/author/{id}/delete','Admin\AuthorController@destroy');
});

// User Route
Route::group(['prefix'=>'admin/dashboard'],function(){
    Route::get('/user','Admin\UserController@index');
    Route::get('/user/create','Admin\UserController@create');
    Route::post('/user/create','Admin\UserController@store');
    Route::get('/user/{id}/edit','Admin\UserController@edit');
    Route::post('/user/{id}/edit','Admin\UserController@update');
    Route::get('/user/{id}/delete','Admin\UserController@destroy');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    
});

