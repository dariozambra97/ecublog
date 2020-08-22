@extends('layouts.app')

@section('content')
<div class="container">
<div class="overlay"></div>
<div class="nav-scroller py-1 mb-2">
     <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted" href="#">World</a>
        <a class="p-2 text-muted" href="#">U.S.</a>
        <a class="p-2 text-muted" href="#">Technology</a>
        <a class="p-2 text-muted" href="#">Design</a>
        <a class="p-2 text-muted" href="#">Culture</a>
        <a class="p-2 text-muted" href="#">Business</a>
        <a class="p-2 text-muted" href="#">Politics</a>
        <a class="p-2 text-muted" href="#">Opinion</a>
        <a class="p-2 text-muted" href="#">Science</a>
        <a class="p-2 text-muted" href="#">Health</a>
        <a class="p-2 text-muted" href="#">Style</a>
        <a class="p-2 text-muted" href="#">Travel</a>
        <a class="p-2 text-muted" href="#">Mis Blogs</a>
    </nav>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="page-heading">
                  <h1>{{$blogs['titulo']}}</h1>
                </div>
            </div>
        </div> 
        <div class="col-md-4">
            <a class="btn btn-success" href="{{url('/')}}">Regresar</a>
        </div>
    </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <p>{{$blogs['descripcion']}}</p>
      <p>{{$blogs['foto']}}</p>
    </div>
  </div>
</div>
</div>
@endsection
