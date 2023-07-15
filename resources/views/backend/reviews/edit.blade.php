@extends('backend.layouts.main')
@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">reviews</h1>
    <a href="/backend/reviews" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
    </div>
    <div class="card-body">
        <form action="/backend/reviews/{{$reviews->id}}" method="post">
            @csrf
            @method('put')

            <div class="form-group row">
                <label for="movies_id" class="col-4 col-form-label">Movies</label>
                <div class="col-8">
                    <select id="movies_id" name="movies_id" class="form-control" required>
                        <option value="">-- Pilih movie --</option>
                        @foreach ($movies as $movie)
                        <option value="{{ $movie->id }}" {{$reviews->movies_id ==$movie->id ? "selected" : ""}}>{{ $movie->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="users_id" class="col-4 col-form-label">users</label>
                <div class="col-8">
                    <select id="users_id" name="users_id" class="form-control" required>
                        <option value="">-- Pilih user --</option>
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{$reviews->users_id == $user->id ? "selected" : ""}}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="date" class="col-4 col-form-label">Date</label>
                <div class="col-8">
                    <input id="date" name="date" value="{{$reviews->date}}" type="date" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="rating" class="col-4 col-form-label">Rating</label>
                <div class="col-8">
                    <input id="rating" name="rating" value="{{$reviews->rating}}" type="number" min="1" max="5" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-4 col-form-label">Description</label>
                <div class="col-8">
                    <textarea id="description" name="description" value="{{$reviews->description}}" class="form-control" required>{{$reviews->description}}</textarea>
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