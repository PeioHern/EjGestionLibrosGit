@extends('layouts.plantilla')

@section('content')
    <h2>LISTADO DE LIBROS</h2>

    <table id="alumnos">
        <tr>
            <th>titulo </th>
            <th>descripcion</th>
            <th>ano_publicacion</th>
            <th>author_id</th>
        </tr>

        @foreach ($libros as $libro)
            <tr>
                <td> {{ $libro->titulo }}</td>
                <td> {{ $libro->descripcion }}</td>
                <td> {{ $libro->ano_publicacion }}</td>
                <td> {{ $libro->author_id }}</td>
            </tr>
        @endforeach

    </table>




@endsection
