<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    protected $table ='kategori_produk';

    public $timestamp =true;

    protected $fillable =[
    	'id','nama','created_at','update_at'
    ];
}
