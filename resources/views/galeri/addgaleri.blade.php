@extends('layout.template')
@section('title','tambah Galeri')
@section('content')
<div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-dark">Galeri</h3>
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
            <form action="/galeri/insert" method="post" enctype="multipart/form-data">
                @csrf                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto 1</label>
                        <div class="custom-file">
                        <input type="file" name="foto_1" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        @error('foto_1')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto 2</label>
                        <div class="custom-file">
                        <input type="file" name="foto_2" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        @error('foto_2')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto 3</label>
                        <div class="custom-file">
                        <input type="file" name="foto_3" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        @error('foto_3')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto 4</label>
                        <div class="custom-file">
                        <input type="file" name="foto_4" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        @error('foto_4')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto 5</label>
                        <div class="custom-file">
                        <input type="file" name="foto_5" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        @error('foto_5')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto 6</label>
                        <div class="custom-file">
                        <input type="file" name="foto_6" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        @error('foto_6')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto 7</label>
                        <div class="custom-file">
                        <input type="file" name="foto_7" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        @error('foto_7')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto 8</label>
                        <div class="custom-file">
                        <input type="file" name="foto_8" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        @error('foto_8')
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
