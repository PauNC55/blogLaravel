@extends('layout')

@section('contenido')

    



@forelse($datos as $post)

    <li class="card"><a class="card-body" href="{{ route('posts.show', $post->id) }}">
            {{ $post->titulo }} - Autor: {{$post->user->name}}
        </a>
    </li>
@empty
    <p>No hay posts disponibles</p>
@endforelse



{{ $datos->links() }}



@endsection