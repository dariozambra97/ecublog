<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;


class indexController extends Controller
{
    public function index()
    {
    	

    	$blogs = Blog::all();
    	
    	return view('welcome', ['blogs' =>$blogs]);
    }

    public function show($id){
    	$blogs = Blog::find($id);

    	return view('/mis_blog', ['blogs' => $blogs]);
    }
}
