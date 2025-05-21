@extends('layouts.plantilla')

@section('content')
    <h2>LISTADO DE AUTORES</h2>

    <table id="alumnos">
        <tr>
            <th>nombre </th>
            <th>pais</th>
        </tr>

        @foreach ($autores as $autor)
            <tr>
                <td> {{ $autor->nombre }}</td>
                <td> {{ $autor->pais }}</td>
                 <td><button class="editar"><a href="{{ route('editAutor', $autor->id) }}"> Editar </a></button></td>
                <td><button class="borrar"> <a href="{{ route('confirmAutor', $autor->id) }}"> Borrar </a></button></td>
            </tr>
        @endforeach

    </table>




@endsection
