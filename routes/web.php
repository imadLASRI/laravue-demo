<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'WelcomeController@index')->name('HomePage');

// store route
Route::post('/storeproduct', 'WelcomeController@store')->name('StoreProduct');

// get all products route
Route::get('/allproducts', 'WelcomeController@getProductsList')->name('AllProducts');