@extends('layouts.app')

@section('content')
<div class="container">
<div class="overlay"></div>
<div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">Deporte</a>
          <a class="p-2 text-muted" href="#">Salud</a>
          <a class="p-2 text-muted" href="#">Tecnologia</a>
          <a class="p-2 text-muted" href="#">Noticia</a>
          <a class="p-2 text-muted" href="#">Economia</a>
          <a class="p-2 text-muted" href="#">Familia</a>
          <a class="p-2 text-muted" href="#">Politica</a>
          <a class="p-2 text-muted" href="#">Ciencia</a>
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
