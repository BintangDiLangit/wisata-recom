<?php

namespace App\Http\Controllers;

use App\Models\Wisata;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $wisatas = Wisata::all();
        return view('dashboard', compact('wisatas'));
    }
}