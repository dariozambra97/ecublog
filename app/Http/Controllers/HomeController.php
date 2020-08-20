<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;


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
          $blogs = Blog::all();
        //dd($blogs);
        return view('home', compact('blogs'));
        //return view('home')->with('blogs', $blogs);
    }
}
