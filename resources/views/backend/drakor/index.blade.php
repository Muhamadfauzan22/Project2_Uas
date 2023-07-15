@extends('backend.layouts.main')
@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Drakor</h1>
    <a href="/backend/drakor/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Data</a>
</div>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data drakor</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Release Date</th>
                        <th>Countries</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Release Date</th>
                        <th>Countries</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->genres->name }}</td>
                        <td>{{ $movie->release_date }}</td>
                        <td>{{ $movie->countries->name }}</td>
                        <td>{{ $movie->rating }}</td>
                        <td class="d-flex">
                            <a href="{{url('/backend/drakor/'.$movie->id)}}" class="btn btn-success btn-sm mr-1"><i class="fas fa-eye"></i></a>
                            <a href="{{ url('/backend/drakor/' . $movie->id . '/edit') }}" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></a>
                            <form action="{{ url('/backend/drakor/'. $movie->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection