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
    return view('welcome');
});

Route::get('tugas_4', function () {
    return view('htmltugas_4');
});

Route::get('praktikum_2', function () {
    return view('htmlpraktikum_2');
});

Route::get('ets', "ViewController@showEts");

//Route::get('isiannama', "ViewController@showForm");
//Route::post('greetings', "ViewController@showForm2");

Route::get('htmlPhp', "ViewController@showHtml");
Route::post('formPhp', "ViewController@showPhp");
Route::post('formPhp2', "ViewController@showPhp2");

//route CRUD Pegawai
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/cari', 'PegawaiController@cari');
Route::get('/pegawai/view/{id}', 'PegawaiController@detail');

//route tugas
Route::get('/tugas', 'TugasController@index');
Route::get('/tugas/tambah', 'TugasController@tambah');
Route::post('/tugas/store', 'TugasController@store');
Route::get('/tugas/edit/{id}', 'TugasController@edit');
Route::post('/tugas/update', 'TugasController@update');
Route::get('/tugas/hapus/{id}', 'TugasController@hapus');

//route CRUD absen
Route::get('/absen', 'AbsenController@indexabsen');
Route::get('/absen/add', 'AbsenController@add');
Route::post('/absen/store', 'AbsenController@store');
Route::get('/absen/edit/{id}', 'AbsenController@edit');
Route::post('/absen/update', 'AbsenController@update');
Route::get('/absen/hapus/{id}', 'AbsenController@hapus');
