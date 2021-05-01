@extends('layout.template')
@section('title','edit achievement')
@section('content')
<div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-dark">Edit Achievement</h3>
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="/achievement/simpanedit/{{$show->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul</label>
                                    <input type="text" name="judul" class="form-control" value="{{$show->judul}}">
                                    @error('judul')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Penjelasan</label>
                                    <input type="text" name="penjelasan" class="form-control" value="{{$show->penjelasan}}">
                                    @error('penjelasan')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-5">
                                        <img src="{{url('img_achievement/'.$show->foto)}}" width="200">
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
