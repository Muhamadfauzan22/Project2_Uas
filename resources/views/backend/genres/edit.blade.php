@extends('backend.layouts.main')
@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Genres</h1>
    <a href="/backend/genres" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data {{$genre->name}} </h6>
    </div>
    <div class="card-body">
        <form action="/backend/genres/{{$genre->id}}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Nama Genre</label>
                <div class="col-8">
                    <input id="name" name="name" value="{{$genre->name}}" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-4 col-form-label">Deskrips Genre</label>
                <div class="col-8">
                    <input id="description" name="description" value="{{$genre->description}}" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection