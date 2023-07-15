<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Genres;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genres::all();
        return view('backend.genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validdata = $request->validate([
            'name' => 'required|unique:genres',
            'description' => 'required',
        ]);
        Genres::create($validdata);
        return redirect('/backend/genres')->with('pesan', "Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre = Genres::find($id);
        return view('backend.genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validdata = $request->validate([
            'name' => 'required|unique:genres,name,' . $id,
            'description' => 'required',
        ]);
        Genres::where('id', $id)->update($validdata);
        return redirect('/backend/genres')->with('pesan', "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Genres::where('id', $id)->delete();
        return redirect('/backend/genres')->with('pesan', "Data berhasil dihapus");
    }
}
