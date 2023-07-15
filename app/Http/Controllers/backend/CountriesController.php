<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use Illuminate\Http\Request;

class countriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Countries::all();
        return view('backend.countries.index', [
            'countries' => $countries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required|unique:countries',
        ]);
        Countries::create($validasi);
        return redirect('/backend/countries')->with('success', "Data added successfully");
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
        $country = Countries::find($id);
        return view('backend.countries.edit', [
            'country' => $country
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = $request->validate([
            'name' => 'required|unique:countries,name,' . $id,
        ]);
        Countries::where('id', $id)->update($validasi);
        return redirect('/backend/countries')->with('success', "Data successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Countries::where('id', $id)->delete();
        return redirect('/backend/countries')->with('success', "Data deleted successfully");
    }
}
