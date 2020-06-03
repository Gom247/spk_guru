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
    return view('welcome');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/data_guru', 'GuruController@index')->name('guru');
Route::post('/data_guru/create', 'GuruController@create')->name('guru.create');
Route::get('/data_guru/{id}/edit', 'GuruController@edit')->name('guru.edit');
Route::post('/data_guru/{id}/update', 'GuruController@update')->name('guru.update');
Route::get('/data_guru/{id}/delete', 'GuruController@delete')->name('guru.delete');
Route::get('/data_guru/{id}/nilai', 'GuruController@nilai')->name('guru.nilai');
Route::post('/data_guru/{id}/create_nilai', 'GuruController@nilaiguru')->name('guru.nilai_guru');
Route::get('/data_nilai', 'NilaiController@index')->name('nilai');
Route::get('/data_kriteria', 'NilaiController@kriteria')->name('kriteria');
Route::post('/data_kriteria/create', 'NilaiController@kriteriainput')->name('kriteria.input');
