@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <table id="mytable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>descripcion</th>
                            <th>foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->titulo }}</td>
                                <td>{{ $blog->descripcion }}</td>
                                <td>{{ $blog->foto }}</td>
                                <td><a class="btn btn-outline-info" href="/crearBlog/{{ $blog['id'] }}/edit">Editar</a></td>
                                <td><a class="btn btn-outline-info" href="#" data-toggle="modal" data-target="#deleteModal">Eliminar</a></td>

                                
                            </tr>

                        @endforeach
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div> 
        <div class="col-md-4">
            <a class="btn btn-success" href="{{url('crearBlog')}}">Crear Blog</a>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby=example></div>
@endsection
