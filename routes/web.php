<?php

use Illuminate\Support\Facades\Route;

// Frontend Route

Route::get('/',function(){
    return view('Frontend/home');
});

// Frontend Route





// Backend Route

Route::get('/home',function(){
    return view('home');
});

Route::get('admin/dashboard', function () {
    return view('Backend/admin/layouts/master');
});

Auth::routes();


// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/home', 'HomeController@index')->name('home');
    
// });

// Backend Route
