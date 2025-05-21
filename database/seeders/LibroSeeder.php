<?php

namespace Database\Seeders;

use App\Models\Autor;
use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Get the first 3 books created earlier
        $autores = Autor::take(3)->get();


        $libro = new Libro();
        $libro->titulo = "the bible";
        $libro->descripcion = "very long book";
        $libro->ano_publicacion = 1940;
        $libro->author_id = $autores[0]->id;
        $libro->save();

        $libro = new Libro();
        $libro->titulo = "amazing small book";
        $libro->descripcion = "insanely captibating";
        $libro->ano_publicacion = 1998;
        $libro->author_id = $autores[1]->id;
        $libro->save();

        $libro = new Libro();
        $libro->titulo = "my biography";
        $libro->descripcion = "very original";
        $libro->ano_publicacion = 2002;
        $libro->author_id = $autores[2]->id;
        $libro->save();







    }
}
