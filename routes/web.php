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


Route::group(['middlaware' => 'guest'], function() {
    
    Route::get('/', 'AuthController@index')->name('login');
    Route::post('/','AuthController@authenticate')->name('login');
    Route::post('ldap','AuthController@authenticateAgainstAD')->name('login.ldap');
    Route::get('invite','InviteController@index');
});

