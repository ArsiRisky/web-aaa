@extends('layout.template')
@section('title','edit visimisi')
@section('content')
<div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-dark">Edit Visi Misi</h3>
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <form action="/visimisi/simpanedit/{{$show->id}}" method="post" enctype="multipart/form-data">
                            @csrf

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Visi</label>
                                    <input type="text" name="visi" class="form-control" value="{{$show->visi}}">
                                    @error('visi')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Misi</label>
                                    <textarea id="konten" class="form-control" name="misi" rows="10" cols="50">{{$show->misi}}</textarea>
                                    @error('misi')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
        </div>
</div>

@endsection
