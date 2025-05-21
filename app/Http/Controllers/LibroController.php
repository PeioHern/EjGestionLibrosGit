<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function listaLibros()
    {

        $libros = Libro::all();
        return view('listaLibros', ['libros' => $libros]);
    }
}
