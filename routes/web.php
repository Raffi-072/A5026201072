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
//Route::post('greetings', "ViewController@showForm");

Route::get('htmlPhp', "ViewController@showHtml");
Route::post('formPhp', "ViewController@showPhp");
Route::post('formPhp2', "ViewController@showPhp2");
