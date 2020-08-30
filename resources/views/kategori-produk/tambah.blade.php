
@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-12">

        <div>
            <a href="{{url('kategori-produk/lihatdata')}}" class="btn btn-danger">Lihat Data</a>
        </div>
        <br>

        <form action="{{ url('kategori-produk/simpan') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama</label>

                    <input type="text" name="nama" class="form-control">

            </div>
            <button class="btn btn-warning">Simpan</button>
        </form>

    </div>

</div>

@endsection
