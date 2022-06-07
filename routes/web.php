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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/topproduct', 'HomeController@topproduct');
Route::get('/topcustomer', 'HomeController@topcustomer');
Route::get('/topagent', 'HomeController@topagent');
Route::get('/order', 'HomeController@order');
Route::get('/order/{id}/detail', 'HomeController@detailorder');
