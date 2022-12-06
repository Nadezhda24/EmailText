<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', 'TextController@getData')->name('home');


Route::post('/send', 'UserController@sendPassword');
Route::post('/account', 'UserController@sendLogin');
Route::post('/product', 'ListController@sendProduct');
//Route::get('/account', 'ListController@Account')->name('account');
Route::get('/account/{id}', 'ListController@Account')->name('account');
Route::get('/send', 'UserController@Authorization');
Route::get('/', 'UserController@Registration');

