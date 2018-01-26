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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'AnggotaController@index');

Route::group(['middleware'=>['auth']], function(){

Route::resource('anggota','AnggotaController');	
Route::resource('pinjaman','PinjamanController');
Route::resource('simpanan','SimpananController');
Route::resource('pembayaran','PembayaranController');
Route::get('/pdf','PDFController@pdf');

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    });
