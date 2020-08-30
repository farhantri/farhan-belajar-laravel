@extends('layouts.app')

@section('content')
						<div class="row">

							<div class="col-md-12">

								<div>
									<a href="{{url('kategori-produk/tambah')}}" class="btn btn-danger">Tambah</a>
								</div>
								<br>

								<table class="table table-bordered table-hovered table-striped">

									<thead>
										<tr>
                                            <th> No </th>
											<th> Nama</th>
											<th> Aksi </th>
										</tr>
									</thead>

									<tbody>
										@foreach ($dataKategori as $data)

										<tr>
                                            <td>{{ $loop->iteration }}</td>
											<td>{{  $data->nama }} </td>
											<td>
												<a href="{{ url('kategori-produk/ubah/'.$data->id) }}" class="btn btn-primary">Ubah</a>
												<a href="{{ url('kategori-produk/hapus/'.$data->id) }}" class="btn btn-secondary">Hapus</a>
											</td>
										</tr>
                                        @endforeach

									</tbody>

								</table>

							</div>

						</div>
@endsection
