@extends('layouts.plantilla')

@section('content')

<form action="{{ route('storeAutor')}}" method="POST" class="agregarAlumno">
    @csrf
    <legend>nombre:</legend>
    <input type="text" name="nombre" id="">
    <legend>pais:</legend>
    <input type="text" name="pais" id="">
    <input type="submit" value="Agregar">
</form>

@endsection
