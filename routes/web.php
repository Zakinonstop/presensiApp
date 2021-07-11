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
Route::post('/editJam/{id}', 'JamController@update');

//jadwal
Route::get('/jadwal', 'JadwalController@index');
Route::get('/tambahJadwal', 'JadwalController@formJadwal');
Route::post('/insertJadwal', 'JadwalController@insert');
Route::get('/hapusJadwal/{id}', 'JadwalController@delete');
Route::get('/formEditJadwal/{id}', 'JadwalController@formEditJadwal');
Route::post('/editJadwal/{jadwal}', 'JadwalController@update')->name('jadwal.update');

//kelas
Route::get('/kelas', 'KelasController@index');
Route::get('/tambahKelas', 'KelasController@formKelas');
Route::post('/insertKelas', 'KelasController@insert');
Route::get('/hapusKelas/{id}', 'KelasController@delete');
Route::get('/formEditKelas/{id}', 'KelasController@formEditKelas');
Route::post('/editKelas/{id}', 'KelasController@update');

//presensi
Route::get('/presensi', 'AbsenController@index');
Route::get('/hapusKelas/{id}', 'AbsenController@delete');

/* Route::get('/tambahKelas', 'KelasController@formKelas');
Route::post('/insertKelas', 'KelasController@insert');
Route::get('/formEditKelas/{id}', 'KelasController@formEditKelas');
Route::post('/editKelas/{id}', 'KelasController@update'); */

//siswa
Route::get('/dataSiswa', 'SiswaController@index');
Route::get('/hapusSiswa/{id}', 'SiswaController@delete');
Route::get('/tambahSiswa', 'SiswaController@formSiswa');
// Route::get('/formEditSiswa/{id}', 'KelasController@formEditKelas');
// Route::post('/insertKelas', 'KelasController@insert');
// Route::post('/editKelas/{id}', 'KelasController@update');

//jadwal
Route::get('/jadwalKelas', 'JadwalKelasController@index');

//profil
Route::get('/profil', 'ProfilController@index');
