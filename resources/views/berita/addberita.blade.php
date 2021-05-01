@extends('layout.template')
@section('title','tambah berita')
@section('content')
<div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-dark">Tambah Berita</h3>
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
            <form action="/berita/insert" method="post" enctype="multipart/form-data">
                @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" class="form-control" name="judul">
                            @error('judul')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Penjelasan</label>
                        <input type="text" class="form-control" name="penjelasan">
                        @error('penjelasan')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                        <div class="form-group">
                        <label for="exampleInputPassword1">Waktu Pembuatan</label>
                        <input type="date" class="form-control" name="waktu">
                        @error('waktu')
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
