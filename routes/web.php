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

Route::get('kategori-produk','KategoriProdukController@index');
Route::get('kategori-produk/tambah','KategoriProdukController@tambah');
Route::post('kategori-produk/simpan','KategoriProdukController@simpan');
Route::get('kategori-produk/ubah/{id}','KategoriProdukController@ubah');
Route::put('kategori-produk/perbarui/{id}','KategoriProdukController@perbarui');
Route::get('kategori-produk/hapus/{id}','KategoriProdukController@hapus');
