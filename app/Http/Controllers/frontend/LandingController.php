<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\Movies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LandingController extends Controller
{
    public function index()
    {
        $banner = Movies::orderByRaw('RAND()')->take(6)->get();
        $slider = Movies::orderByRaw('RAND()')->take(8)->get();
        $featured = Movies::orderByRaw('RAND()')->take(12)->get();
        $toprating = Movies::orderBy('rating', 'desc')->take(6)->get();
        $recently = Movies::orderBy('created_at', 'desc')->take(6)->get();
        $populer = Movies::orderByRaw('RAND()')->take(12)->get();
        return view('frontend.index', compact('banner', 'slider', 'featured', 'toprating', 'recently', 'populer'));
    }
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validatedData)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('/backend')->with('authsuccess', 'Login successfully as admin');
            } else {
                return redirect('/')->with('authsuccess', 'Login successfully as user');
            }
        }

        return back()->withErrors([
            'email' => 'The provided validateData do not match our records.',
        ]);
    }
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
            'role' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/')->with('authsuccess', 'Registration successful. Please login.');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('authsuccess', 'Logout successful');
    }

    
}
