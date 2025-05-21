@extends('layouts.plantilla')

@section('content')

<form action="{{ route('deleteAutor', $autor)}}" method="POST">
    @csrf
    @method('delete')

    <br>
    <legend>deseas eliminar el autor {{$autor->nombre}}?</legend>
    <br>

    <a href="{{route('listaAutores')}}">volver</a>
    <input type="submit" value="eliminar">
    <br><br>
 
</form>

@endsection
