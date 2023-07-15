<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Genres;
use App\Models\Movies;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genres::all();
        return view('frontend.genres.index', compact('genres'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genre = Genres::findOrFail($id);
        $movies = Movies::where('genres_id', $id)->get();
        return view('frontend.genres.show', compact('genre', 'movies'));
    }

}
