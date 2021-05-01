@extends('layout.template')
@section('title','edit pimpinan')
@section('content')
<div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-dark">Edit Pimpinan</h3>
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="/pimpinan/simpanedit/{{$show->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="{{$show->nama}}">
                                    @error('nama')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-5">
                                        <img src="{{url('img_pimpinan/'.$show->foto)}}" width="200">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                    <label for="exampleInputPassword1">Foto</label>
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="foto" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    @error('foto')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                        </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection
