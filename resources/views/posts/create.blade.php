@extends('layout')

@section('contenido')
<h1 class="form-group">Post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="column">
        <div class="form-group col-5">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" name="titulo" id="titulo">
        </div>
        <div class="form-group col-6">
            <label for="contenido">Contenido:</label>
            <textarea name="contenido" class="form-control" id="contenido"></textarea>
        </div>
        <div class="form-group col-5">
            <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block btn-sm col-3">

        </div>
        
    </div>
</form>

@endsection