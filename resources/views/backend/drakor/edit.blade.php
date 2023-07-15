@extends('backend.layouts.main')
@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Drakor</h1>
    <a href="/backend/drakor" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
    </div>
    <div class="card-body">
        <form action="/backend/drakor/{{$movie->id}}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="title" class="col-4 col-form-label">Title</label>
                <div class="col-8">
                    <input id="title" name="title" value="{{$movie->title}}" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="poster" class="col-4 col-form-label">Poster</label>
                <div class="col-8">
                    <input id="poster" name="poster" value="{{$movie->poster}}" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="genres_id" class="col-4 col-form-label">Genres</label>
                <div class="col-8">
                    <select id="genres_id" name="genres_id" class="form-control" required>
                        <option value="">-- Pilih Genre --</option>
                        @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" {{$movie->genres_id !=$genre->id ? "" : "selected"}}>{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="release_date" class="col-4 col-form-label">Release date</label>
                <div class="col-8">
                    <input id="release_date" name="release_date" value="{{$movie->release_date}}" type="date" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="countries_id" class="col-4 col-form-label">Countries</label>
                <div class="col-8">
                    <select id="countries_id" name="countries_id" class="form-control" required>
                        <option value="">-- Pilih Countries --</option>
                        @foreach ($countries as $country)
                        <option value="{{ $country->id }}" {{$movie->countries_id !=$country->id ? "" : "selected"}}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="rating" class="col-4 col-form-label">Rating</label>
                <div class="col-8">
                    <input id="rating" name="rating" value="{{$movie->rating}}" type="number" max="5" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="synopsis" class="col-4 col-form-label">Synopsis</label>
                <div class="col-8">
                    <textarea id="synopsis" name="synopsis" value="{{$movie->synopsis}}" class="form-control" required>{{$movie->synopsis}}</textarea>
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