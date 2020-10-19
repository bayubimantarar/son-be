<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'authentication'], function(){
    Route::get('/login-form', [
        'uses' => 'App\Http\Controllers\Authentication\LoginController@index',
        'as' => 'authentication.login-form'
    ]);
    Route::post('/login', [
        'uses' => 'App\Http\Controllers\Authentication\LoginController@login',
        'as' => 'authentication.login'
    ]);
});
