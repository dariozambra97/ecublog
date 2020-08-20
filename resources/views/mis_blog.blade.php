@extends('layouts.app')

@section('content')
                <div class="overlay"></div>

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
            <a class="btn btn-success" href="{{url('welcome')}}">Regresar</a>
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
@endsection
