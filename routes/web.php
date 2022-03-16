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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/syarat', 'HomeController@syarat');
Route::get('/ajukan-pembiayaan', 'PermohonanController@add');
Route::get('/status-pembiayaan', 'PermohonanController@list_anggota');
Route::get('/profil', 'UserController@update');
Route::get('/detail-permohonan/{$id}', 'PermohonanController@detail');

Route::get('/anggota', 'UserController@index');
Route::get('/tambah-anggota', 'UserController@add');
Route::get('/edit-anggota/{id}', 'UserController@edit');
Route::get('/hapus-anggota/{id}', 'UserController@delete');

Route::post('/simpan-pengajuan', 'PermohonanController@save');
Route::post('/ubah-profil', 'UserController@action_update');
Route::post('/simpan-anggota', 'UserController@save');
Route::post('/ubah-anggota', 'UserController@action_edit');


Auth::routes();
