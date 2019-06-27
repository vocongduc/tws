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


     Route::get('websitedesign',function(){
     	return view('TW.websitedesign');
     })->name('websitedesign');

      Route::get('softwareDesign',function(){
    	return view('TW.softwaredesign');
     })->name('softwaredesign');


         Route::get('appdevelopment',function(){
    	return view('TW.appdevelopment');
     })->name('appdevelopment');

          Route::get('programmers',function(){
    	return view('TW.programmers');
     })->name('programmers');
});