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
Route::get('/new', 'HomeController@new');
Route::post('/store', 'HomeController@store');
Route::get('/edit/{id}', 'HomeController@edit');
Route::post('/update/{id}', 'HomeController@update');
Route::get('/delete/{id}', 'HomeController@delete');

