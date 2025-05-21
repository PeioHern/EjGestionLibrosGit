@extends('layouts.plantilla')

@section('content')
    <h2>LISTADO DE OPINIONES</h2>

    <table id="alumnos">
        <tr>
            <th>book_id</th>
            <th>nombre_usuario</th>
            <th>valoracion</th>
            <th>comentario</th>
        </tr>

        @foreach ($opiniones as $opinion)
            <tr>
                <td> {{ $opinion->book_id }}</td>
                <td> {{ $opinion->nombre_usuario }}</td>
                <td> {{ $opinion->valoracion }}</td>
                <td> {{ $opinion->comentario }}</td>
            </tr>
        @endforeach

    </table>




@endsection
