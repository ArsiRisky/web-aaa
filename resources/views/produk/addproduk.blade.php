@extends('layout.template')
@section('title','tambah Product')
@section('content')
<div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-dark">Product</h3>
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                            <form action="/produk/insert" method="post" enctype="multipart/form-data">
                                @csrf                    
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Jenis</label>
                                        <input type="text" name="jenis" class="form-control" id="exampleInputPassword1">
                                            @error('jenis')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Penjelasan</label>
                                        <input type="text" name="penjelasan" class="form-control" id="exampleInputPassword1">
                                            @error('penjelasan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Lebar kayu</label>
                                        <input type="text" name="lebar" class="form-control" id="exampleInputPassword1">
                                            @error('lebar')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Panjang kayu</label>
                                        <input type="text" name="panjang" class="form-control" id="exampleInputPassword1">
                                            @error('panjang')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tebal kayu</label>
                                        <input type="text" name="tebal" class="form-control" id="exampleInputPassword1">
                                            @error('tebal')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Jenis kayu</label>
                                        <input type="text" name="kayu" class="form-control" id="exampleInputPassword1">
                                            @error('kayu')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                        </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Foto Product 1</label>
                                            <div class="custom-file">
                                            <input type="file" name="foto_1" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            @error('foto_1')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Foto Product 2</label>
                                            <div class="custom-file">
                                            <input type="file" name="foto_2" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            @error('foto_2')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Foto Product 3</label>
                                            <div class="custom-file">
                                            <input type="file" name="foto_3" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            @error('foto_3')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                </div>
        </div>
    </div>

@endsection
