
@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-12">

        <div>
            <a href="{{url('kategori-produk/lihatdata')}}" class="btn btn-danger">Lihat Data</a>
        </div>
        <br>

        <form action="{{ url('kategori-produk/perbarui/'.$kategoriProduk->id) }}" method="POST">
            @csrf
            @method('put');
            <div class="form-group">
                <label>Nama</label>

                    <input type="text" name="nama" class="form-control" value="{{ $kategoriProduk->nama }}">

            </div>
            <button class="btn btn-warning">Perbarui</button>
        </form>

    </div>

</div>

@endsection
