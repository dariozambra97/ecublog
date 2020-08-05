<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;


class blogController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        return view('blog.crear');
    }
    public function create()
    {
        
    }
    public function store(Request $request)
    {
    	$data = request()->validate([
    		'titulo' => 'required|max:255',
    		'descripcion' =>'required|max:500',
    		'foto' => 'required|max:2',
    	]);

    	$user = auth()->user();
    	$blog = new Blog();
    	$blog->titulo = request('titulo');
    	$blog->descripcion = request('descripcion');
    	$blog->foto = request('foto');
		$blog->userId = $user->id;

		$blog->save();

		return redirect('home');
    	
    }
    public function edit($value)
    {
    	$blog = Blog::where('id', $value)->first();
        return view('blog.edit',
                ['blog' => $blog],
            );
    }
    public function update( Request $request, $id)
    {
    	
	    Blog::where('id', $id)->update($request->all());
	    return redirect('blog.crear');
    }
    
}
	
