<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('TW.home');
});
Route::group(['prefix' => 'home'], function () {
    Route::get('services', function () {
        return view('TW.services');
    })->name('services');
    Route::get('abc', function () {
        return view('TW.abc');
    })->name('abc'); 
});
