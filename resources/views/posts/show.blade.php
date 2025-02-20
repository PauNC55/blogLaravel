@extends('layout')

@section('contenido')

    <div class="container mt-5 col-5">
        <div class="card">
            <div class="card-header">
                {{$datos->titulo}} 
            </div>
            <div class="card-body">
                Autor del post: {{$datos->user->name}}
                <br>
                {{$datos->contenido}}
            </div>
            <div class="card-footer">
                <a href="{{route('posts.edit', $datos->id)}}">Editar</a>
                <form action="{{ route('posts.destroy', $datos->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Borrar" />
                </form>
            </div>
        </div>
    </div>

    
    
@endsection