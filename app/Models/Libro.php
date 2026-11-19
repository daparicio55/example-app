<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable =[
        'titulo',
        'precio',
        'codigo_sbn',
        'fecha_publicacion',
        'categoria_id',
        'autore_id'
    ];  

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function autore()
    {
        return $this->belongsTo(Autore::class);
    }
}
