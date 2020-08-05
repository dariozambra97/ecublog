@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="POST" action="/crearBlog" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo..." value="{{ old('titulo')}}"> 
                        </div> 
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{ old('descripcion')}}"> 
                        </div> 
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="text" name="foto" class="form-control" id="foto"> 
                        </div>                        
                        <div class="form-group pt-2">
                            <input class="btn btn-success" type="submit" value="crear">
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
