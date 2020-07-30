<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\blog\blog;

class indexController extends Controller
{
    public function index()
    {
    	

    	$latestBlogs = [
    		[
    			'title' => 'Hola mundo 1',
    			'content' => 'Mi contenido 1'
    		],
    		[
    			'title' => 'Hola mundo 2',
    			'content' => 'Mi contenido 2'
    		]
    	];

    	$blogClae = new blog();
    	$blogClae->getByVisit();
    	//dd($blogClae);
    	$blog = $blogClae->blog;
    	return view('welcome', compact('blog','latestBlogs'));
    }
}
