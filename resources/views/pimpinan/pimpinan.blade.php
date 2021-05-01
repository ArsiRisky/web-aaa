@extends('layout.template')
@section('title','Pimpinan')
@section('content')

<div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-dark">Data Pimpinan</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive p-2">
                <a href="/pimpinan/add" type="button" class="btn btn-primary mb-3">Tambah</a>
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-success text-white">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($datapimpinan as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->nama}}</td>
                                <td><img src="{{url('img_pimpinan/'.$row->foto)}}" width="120"></td>
                                <td class="text-center">
                                    <a href="/pimpinan/edit/{{$row->id}}" type="button" class="btn m-1 btn-warning"><i class="fas fa-fw fa-user-edit"></i></a>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection