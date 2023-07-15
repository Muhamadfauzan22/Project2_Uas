@extends('backend.layouts.main')
@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">users</h1>
    <a href="/backend/users" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
    </div>
    <div class="card-body">
        <form action="/backend/users/{{$user->id}}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Name</label>
                <div class="col-8">
                    <input id="name" name="name" value="{{$user->name}}" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" value="{{$user->email}}" type="email" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-4 col-form-label">Password</label>
                <div class="col-8">
                    <input id="password" name="password"  type="text" class="form-control"  placeholder="kosongkan jika tidak ingin edit password">
                </div>
            </div>
            <div class="form-group row">
                <label for="role" class="col-4 col-form-label">Role</label>
                <div class="col-8">
                    <input id="admin" name="role" {{$user->role == "admin" ? 'checked' : ''}} type="radio" required> <label for="admin">admin</label>
                    <input id="user" name="role" {{$user->role == "user" ? 'checked' : ''}} type="radio" required> <label for="user">user</label>
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