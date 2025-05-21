@extends('layouts.plantilla')

@section('content')

<form action="{{ route('updateAutor', $autor)}}" method="POST" class="modificarAlumno">
    @csrf

    @method('put')
    <legend>nombre:</legend>
    <input type="text" name="nombre" id="" value="{{$autor->nombre}}">
    <legend>pais:</legend>
    <input type="text" name="pais" id="" value="{{$autor->pais}}">
    <input type="submit" value="modificar">
</form>

@endsection
