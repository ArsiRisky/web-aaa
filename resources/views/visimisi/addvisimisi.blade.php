@extends('layout.template')
@section('title','tambah VisiMisi')
@section('content')
<div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-dark">Tambah Visimisi</h3>
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
            <form action="/visimisi/insert" method="post" enctype="multipart/form-data">
                @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">Visi</label>
                        <input type="text" class="form-control" name="visi">
                            @error('visi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Misi</label>
                        <textarea id="konten" class="form-control" name="misi" rows="10" cols="50"></textarea>
                        @error('misi')
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