@extends('layout.template')
@section('title','Produk')
@section('content')

<div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-dark">Data Product</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive p-2">
                <a href="/produk/add" type="button" class="btn btn-primary mb-3">Tambah</a>
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-success text-white">
                            <th>No</th>
                            <th>Jenis</th>
                            <th>Penjelasan</th>
                            <th>Lebar Kayu</th>
                            <th>Panjang Kayu</th>
                            <th>Tebal kayu</th>
                            <th>Jenis Kayu</th>
                            <th>Foto Product 1</th>
                            <th>Foto Product 2</th>
                            <th>Foto Product 3</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($dataproduct as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->jenis}}</td>
                                    <td>{{$row->penjelasan}}</td>
                                    <td>{{$row->lebar}}</td>
                                    <td>{{$row->panjang}}</td>
                                    <td>{{$row->tebal}}</td>
                                    <td>{{$row->kayu}}</td>
                                    <td><img src="{{url('img_product/'.$row->foto_1)}}" width="200"></td>
                                    <td><img src="{{url('img_product/'.$row->foto_2)}}" width="200"></td>
                                    <td><img src="{{url('img_product/'.$row->foto_3)}}" width="200"></td>
                                    <td class="text-center">
                                        <a href="/produk/edit/{{$row->id}}" type="button" class="btn m-1 btn-warning"><i class="fas fa-fw fa-user-edit"></i></a>
                                        <a href="/produk/delete/{{$row->id}}" type="button" class="btn btn-danger" onclick="return confirm('anda yakin menghapus data ini ?');">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </a></td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection