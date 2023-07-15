<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\Movies;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Countries::all();
        return view('frontend.countries.index', [
            'countries' => $countries
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movies = Movies::where('countries_id', $id)->get();
        $country = Countries::find($id);
        return view('frontend.countries.show', [
            'movies' => $movies,
            'country' => $country
        ]);
    }
}
