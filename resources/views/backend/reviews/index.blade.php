@extends('backend.layouts.main')
@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Reviews</h1>
    <a href="/backend/reviews/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Data</a>
</div>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data reviews</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>User</th>
                        <th>Drakor</th>
                        <th>Description</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>User</th>
                        <th>Drakor</th>
                        <th>Description</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($reviews as $review)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $review->date }}</td>
                        <td>{{ $review->users->name }}</td>
                        <td>{{ $review->movies->title }}</td>
                        <td>{{ $review->description }}</td>
                        <td>{{ $review->rating }}</td>
                        <td class="d-flex">
                            <a href="{{ url('/backend/reviews/' . $review->id . '/edit') }}" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></a>
                            <form action="{{ url('/backend/reviews/'. $review->id) }}" method="POST">
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