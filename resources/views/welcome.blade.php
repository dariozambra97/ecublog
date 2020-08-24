@extends('layouts.app')

@section('content')
<div class="container">
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

      <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic"></h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          @foreach ($blogs as $blogs)
          <div class="blogs-preview">
            <a href="/index/{{$blogs['id']}}">
              <h2 class="blogs.titulo">
                {{$blogs['titulo']}}
              </h2>
              <h3 class="blogs.descripcion">
                {{ getShorterString($blogs['descripcion'], 10 )}}
              </h3>
              <h4 class="blogs.foto">
                {{$blogs['foto']}}
              </h4>
            </a>
          </div>
          @endforeach
          
        </div>
        
      </div>
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-4 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>
        </div>

        <aside class="col-md-4 blog-sidebar">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          <div class="p-4">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>

          <div class="p-4">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
</div>
@endsection
