@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="POST" action="/crearBlog/{{ $blog->id }}" enctype="multipart/form-data">
                        @method('PATCH')
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo..." value="{{ $blog->titulo }}"> 
                        </div> 
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{ $blog->descripcion}}"> 
                        </div> 
                        <form enctype="multipart/form-data" action="uploader.php" method="POST">
                        <input name="foto" type="file"class="form-control" id="foto"/>
                        <input type="submit" value="Subir archivo" />
                        </form>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Estado
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                              <a class="dropdown-item" href="#">Activo</a>
                              <a class="dropdown-item" href="#">Inactivo</a>
                            </div>
                          </div>
                        
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Categoria
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                              <a class="dropdown-item" href="#">Deporte</a>
                              <a class="dropdown-item" href="#">Salud</a>
                              <a class="dropdown-item" href="#">Tecnologia</a>
                              <a class="dropdown-item" href="#">Noticia</a>
                              <a class="dropdown-item" href="#">Economia</a>
                              <a class="dropdown-item" href="#">Familia</a>
                              <a class="dropdown-item" href="#">Politica</a>
                              <a class="dropdown-item" href="#">Ciencia</a>
                         </div>
                         </div>                                        
                        <div class="form-group pt-2">
                            <input class="btn btn-success" type="submit" value="guardar">
                        </div>

                    </form>
                </div>
            </div>
        </div> 
        <div class="col-md-4">
            <a class="btn btn-success" href="{{url('home')}}">Regresar</a>
        </div>
    </div>
</div>
@endsection
