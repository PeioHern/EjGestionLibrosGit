<?php

namespace Database\Seeders;

use App\Models\Libro;
use App\Models\Opinion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpinionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // Get the first 3 books created earlier
        $libros = Libro::take(3)->get();

        $opinion = new Opinion();
        $opinion->book_id = $libros[0]->id;
        $opinion->nombre_usuario = "joe_mamam";
        $opinion->valoracion = 2;
        $opinion->comentario = "this sucks ass";
        $opinion->save();

        $opinion = new Opinion();
        $opinion->book_id = $libros[1]->id;
        $opinion->nombre_usuario = "triping_dawg";
        $opinion->valoracion = 4;
        $opinion->comentario = "cool stuff";
        $opinion->save();

        $opinion = new Opinion();
        $opinion->book_id = $libros[2]->id;
        $opinion->nombre_usuario = "mikey_spikey";
        $opinion->valoracion = 5;
        $opinion->comentario = "damm this is good";
        $opinion->save();
    }
}
