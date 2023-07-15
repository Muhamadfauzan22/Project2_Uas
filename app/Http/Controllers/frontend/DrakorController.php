<?php

namespace App\Http\Controllers\frontend;

use App\Models\Movies;
use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class DrakorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $drakor = Movies::find($id);
        $recentdrakor = Movies::orderBy('created_at', 'desc')->limit(8)->get();
        $toprating = Movies::orderBy('rating', 'desc')->limit(8)->get();
        return view('frontend.drakor.show', compact('drakor', 'recentdrakor', 'toprating'));
    }
    public function store(Request $request)
    {
        $reviews = Reviews::create($request->all());
        $id = $reviews->movies_id;
        $url = "/drakor/$id";
        return Redirect::to($url);

    }
}
