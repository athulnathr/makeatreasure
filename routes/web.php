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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , 'ClientController@index')->name('index');
Route::get('/join' , 'ClientController@join')->name('join');
Route::post('/join-now' , 'ClientController@store')->name('join-now');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
