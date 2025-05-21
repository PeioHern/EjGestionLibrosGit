<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('opiniones', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('libros')->onDelete('cascade');
            $table->string('nombre_usuario');
            $table->integer('valoracion');
            $table->string('comentario');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opiniones');
    }
};
