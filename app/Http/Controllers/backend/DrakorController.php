<?php

namespace App\Http\Controllers\backend;

use App\Models\Genres;
use App\Models\Movies;
use App\Models\Countries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DrakorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movies::all();
        return view('backend.drakor.index', [
            'movies' => $movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genres::all();
        $countries = Countries::all();
        return view('backend.drakor.create', [
            'genres' => $genres,
            'countries' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Movies::create($request->all());
        return redirect('/backend/drakor')->with('success', "Data added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect('/drakor/' . $id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movies::find($id);
        $genres = Genres::all();
        $countries = Countries::all();
        return view('backend.drakor.edit', [
            'movie' => $movie,
            'genres' => $genres,
            'countries' => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movies::find($id);
        $movie->update($request->all());
        return redirect('/backend/drakor')->with('success', "Data updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movies::find($id);
        $movie->delete();
        return redirect('/backend/drakor')->with('success', "Data deleted successfully");
    }
}
