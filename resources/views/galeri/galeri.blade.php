@extends('layout.template')
@section('title', 'Galeri')
@section('content')

<div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-dark">Data Galeri</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive p-2">
                <a href="/galeri/add" type="button" class="btn btn-primary mb-3">Tambah</a>
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-success text-white">
                            <th>No</th>
                            <th>Foto 1</th>
                            <th>Foto 2</th>
                            <th>Foto 3</th>
                            <th>Foto 4</th>
                            <th>Foto 5</th>
                            <th>Foto 6</th>
                            <th>Foto 7</th>
                            <th>Foto 8</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($datagaleri as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{url('img_galery/'.$row->foto_1)}}" width="200"></td>
                                <td><img src="{{url('img_galery/'.$row->foto_2)}}" width="200"></td>
                                <td><img src="{{url('img_galery/'.$row->foto_3)}}" width="200"></td>
                                <td><img src="{{url('img_galery/'.$row->foto_4)}}" width="200"></td>
                                <td><img src="{{url('img_galery/'.$row->foto_5)}}" width="200"></td>
                                <td><img src="{{url('img_galery/'.$row->foto_6)}}" width="200"></td>
                                <td><img src="{{url('img_galery/'.$row->foto_7)}}" width="200"></td>
                                <td><img src="{{url('img_galery/'.$row->foto_8)}}" width="200"></td>
                                <td class="text-center">
                                    <a href="/galeri/edit/{{$row->id}}" type="button" class="btn m-1 btn-warning"><i class="fas fa-fw fa-user-edit"></i></a>
                                    <a href="/galeri/delete/{{$row->id}}" type="button" class="btn btn-danger" onclick="return confirm('anda yakin menghapus data ini ?');">
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