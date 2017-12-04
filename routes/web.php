<?php

/*
|--------------------------------------------------------------------------
|</a> Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin','AdminController@dashboard');
Route::get('admin/newcode','AdminController@newcode');
Route::post('admin/create','AdminController@create');
Route::get('admin/indexcode','AdminController@indexcode');


Route::get('mahasiswa/registrasi','MahasiswaController@registrasi');
Route::post('mahasiswa/create','MahasiswaController@create');
Route::get('/','MahasiswaController@code');
Route::post('mahasiswa/{id}/update','MahasiswaController@update');