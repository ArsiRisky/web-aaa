@extends('layout.template')
@section('title','tambah pimpinan')
@section('content')
<div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-dark">Tambah Pimpinan</h3>
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
            <form action="/pimpinan/insert" method="post" enctype="multipart/form-data">
                @csrf

                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text" class="form-control" name="nama">
                        @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto</label>
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        @error('foto')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                    </div>
                </div>
        </div>
    </div>

@endsection
