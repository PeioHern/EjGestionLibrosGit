<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
        protected $table = "opiniones";
    protected $primaryKey = "id";
    protected $fillable = ['book_id', 'nombre_usuario', 'valoracion', 'comentario'];
    protected $hidden = ['id'];




     public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
}
