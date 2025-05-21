<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
       protected $table = "libros";
    protected $primaryKey = "id";
    protected $fillable = ['titulo', 'descripcion', 'ano_publicacion', 'author_id'];
    protected $hidden = ['id'];





 public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

     public function opiniones()
    {
        return $this->hasMany(Opinion::class);
    }

}
