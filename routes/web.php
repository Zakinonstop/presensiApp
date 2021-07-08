<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/absen', 'HomeController@absen');

//dashboard
Route::get('/dashboard', 'DashboardController@index');

//mapel
Route::get('/mapel', 'MapelController@index');
Route::get('/tambahMapel', 'MapelController@formMapel');
Route::post('/insertMapel', 'MapelController@insert');
Route::get('/hapusMapel/{id}', 'MapelController@delete');
Route::get('/formEditMapel/{id}', 'MapelController@formEditMapel');
Route::get('/editMapel/{id}', 'MapelController@update');

//jam
Route::get('/jam', 'JamController@index');
Route::get('/tambahJam', 'JamController@formJam');
Route::post('/insertJam', 'JamController@insert');
Route::get('/hapusJam/{id}', 'JamController@delete');
Route::get('/formEditJam/{id}', 'JamController@formEditJam');
Route::get('/editJam/{id}', 'JamController@update');

//jadwal
Route::get('/jadwal', 'JadwalController@index');
