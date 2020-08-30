<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;

class KategoriProdukController extends Controller
{

	/**
	 * Menampilkan Kategori Produk
	 */
    public function index()
    {
    	$dataKategori= KategoriProduk::all() ;

    	return view('kategori-produk.index',['dataKategori'=>$dataKategori]);

    }

    /**
	 * Menambahkan Kategori Produk
	 */
    public function tambah()
    {
    	return view('kategori-produk.tambah');
    }

    /**
     * Menyimpan Data Ke Databse
    */
    public function simpan()
    {
        $nama=request('nama');
        KategoriProduk::create(['nama'=>$nama]);

        return redirect('kategori-produk');
    }

    /**
     * Menampilkan Halaman Ubah
     */
    public function ubah($id)
    {
       $kategoriProduk= KategoriProduk::where('id',$id)->first();

       return view('kategori-produk.ubah', ['kategoriProduk'=>$kategoriProduk]);
    }

    public function perbarui($id)
    {
        $nama=request('nama');
        KategoriProduk::where ('id',$id)->update(['nama'=>$nama]);
        return redirect('kategori-produk');
    }

    /**
     * Menghapus Kategori Produk
     */
    public function hapus($id)
    {
        KategoriProduk::where('id',$id)->delete();
        return redirect('kategori-produk');
    }
}
