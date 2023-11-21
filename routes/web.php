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

Route::get('/', function () {
    return view('5026221035');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/halo2', function () {
    return "<h1>Halo Apa Kabar?</h1>";
});

Route::get('/malasngoding', function () {
    return  view('welcome');
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('/successformets', function () {
	return view('successformets');
});

Route::get('/latihan1', function () {
	return view('latihan1');
});

Route::get('/latihan2', function () {
	return view('latihan2');
});

Route::get('/latihan3', function () {
	return view('latihan3');
});

Route::get('/latihan4', function () {
	return view('latihan4');
});

Route::get('/latihan5', function () {
	return view('latihan5');
});

Route::get('/latihan6', function () {
	return view('latihan6');
});

Route::get('/latihan7', function () {
	return view('latihan7');
});

Route::get('/latihan8', function () {
	return view('latihan8');
});

Route::get('/tugasreplika', function () {
	return view('tugasreplika');
});

Route::get('/tugaslayout', function () {
	return view('tugaslayout');
});

Route::get('perkalian' , 'App\Http\Controllers\DosenController@index');
Route::get('biodata' , 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}' , 'App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
