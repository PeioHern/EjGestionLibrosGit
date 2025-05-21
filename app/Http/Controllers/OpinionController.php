<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    

  public function listaOpiniones()
    {

        $opiniones = Opinion::all();
        return view('listaOpiniones', ['opiniones' => $opiniones]);
    }


}
