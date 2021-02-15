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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/check_in', 'HomeController@check_in');
Route::get('/home/daftar_absen', 'HomeController@daftar_absen');
Route::post('/home/check_out', 'HomeController@check_out');
Route::get('/', 'LoginController@index')->name('login');
Route::get('/register', 'RegisterController@index')->name('register');
Route::post('/', 'LoginController@store')->name('postlogin');
Route::post('/logout', 'LoginController@logout')->name('logout');
