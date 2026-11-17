<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
