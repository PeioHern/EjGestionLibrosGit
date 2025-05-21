<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
   

  public function listaAutores()
    {

        $autores = Autor::all();
        return view('listaAutores', ['autores' => $autores]);
    }




  public function storeAutor(Request $request)
    {
        $autor = new Autor();

        $autor->nombre = $request->nombre;
        $autor->pais = $request->pais;

        $autor->save();

        return redirect()->route('listaAutores');
    }







    public function editAutor($id)
    {
        $autor = Autor::find($id);
        return view('editAutor', compact('autor'));
    }

     public function updateAutor(Request $request, Autor $autor)
    {
        $autor->nombre = $request->nombre;
        $autor->pais = $request->pais;

        $autor->save();

        return redirect()->route('listaAutores');
    }







      public function confirmAutor($id)
    {
        $autor = Autor::find($id);
        return view('confirmAutor', compact('autor'));
    }
  

        public function deleteAutor(Autor $autor)
    {
        $autor->delete();

        return redirect()->route('listaAutores');
    }


}
