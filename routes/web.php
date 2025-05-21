<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\OpinionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
})->name('home');

//(crear, ver, modificar, eliminar)

//VER
Route::get('/listaAutores', [AutorController::class, 'listaAutores'])->name('listaAutores');
Route::get('/listaLibros', [LibroController::class, 'listaLibros'])->name('listaLibros');
Route::get('/listaOpiniones', [OpinionController::class, 'listaOpiniones'])->name('listaOpiniones');


//CREAR
Route::get('/creacionAutor', function () {
    return view('creacionAutor');
})->name('creacionAutor');
Route::post('/storeAutor', [AutorController::class, 'storeAutor'])->name('storeAutor');


//MODIFICAR (boton)
Route::get('/editAutor/{id}', [AutorController::class, 'editAutor'])->name('editAutor');
Route::put('/updateAutor/{autor}', [AutorController::class, 'updateAutor'])->name('updateAutor');



//ELIMINAR (boton)
Route::get('/confirmAutor/{id}', [AutorController::class, 'confirmAutor'])->name('confirmAutor');
Route::delete('/deleteAutor/{alumno}', [AutorController::class, 'deleteAutor'])->name('deleteAutor');
