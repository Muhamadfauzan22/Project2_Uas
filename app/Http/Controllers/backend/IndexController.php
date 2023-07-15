<?php

namespace App\Http\Controllers\backend;

use App\Models\Genres;
use App\Models\Movies;
use App\Models\Reviews;
use App\Models\Countries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function dashboard()
    {
        $jumlahgenre = Genres::count();
        $jumlahnegara = Countries::count();
        $jumlahdrakor = Movies::count();
        $jumlahreview = Reviews::count();
        $userterbaru = User::orderBy('created_at', 'desc')->limit(5)->get();
        $reviewsterbaru = Reviews::orderBy('created_at', 'desc')->limit(5)->get();
        return view('backend.index', compact('jumlahgenre', 'jumlahnegara', 'jumlahdrakor','jumlahreview','userterbaru', 'reviewsterbaru'));
    }
}
