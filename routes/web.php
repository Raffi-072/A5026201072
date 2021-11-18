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

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
