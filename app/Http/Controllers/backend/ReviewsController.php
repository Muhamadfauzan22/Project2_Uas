<?php

namespace App\Http\Controllers\backend;

use App\Models\Movies;
use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Reviews::all();
        return view('backend.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movies::all();
        $users = User::all();
        return view('backend.reviews.create', compact('movies', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Reviews::create($request->all());
        return redirect('/backend/reviews')->with('status', 'Review successfully added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reviews = Reviews::findOrFail($id);
        $movies = Movies::all();
        $users = User::all();
        return view('backend.reviews.edit', compact('reviews', 'movies', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reviews = Reviews::findOrFail($id);
        $reviews->update($request->all());
        return redirect('/backend/reviews')->with('status', 'Review successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reviews = Reviews::findOrFail($id);
        $reviews->delete();
        return redirect('/backend/reviews')->with('status', 'Review successfully deleted!');
    }
}
