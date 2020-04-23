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
    return view('pages.admin.login');
});

Route::get('/coba-confirmasi', function () {
    return view('pages.admin.confirmasi');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function (){


    Route::get('/','UserController@index')->name('admin.index');

    Route::get('obat', 'ObatController@index')->name('obat.index');
    Route::get('obat/create','ObatController@create')->name('obat.create');
    Route::post('obat/create','ObatController@store')->name('obat.store');
    Route::get('obat/{id}/edit', 'ObatController@edit')->name('obat.edit');
    Route::patch('obat/update/{id}','ObatController@update')->name('obat.update');



    Route::get('transaksi', 'TransaksiController@index')->name('transaksi.index');
    Route::get('transaksi/create', 'TransaksiController@create')->name('transaksi.create');
    Route::post('transaksi/create','TransaksiController@store')->name('transaksi.store');



    Route::get('merk', 'MerkController@index')->name('merk.index');
    Route::get('merk/create', 'MerkController@create')->name('merk.create');
    Route::post('merk/create','MerkController@store')->name('merk.store');
    Route::get('merk/{id}/edit', 'MerkController@edit')->name('merk.edit');
    Route::patch('merk/update/{id}','MerkController@update')->name('merk.update');
    Route::get('merk/destroy/{id}','MerkController@destroy')->name('merk.destroy');

});
