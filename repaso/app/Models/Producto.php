<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{ 
    // Tabla si el nombre no sigue la convención (nombre en singular, sin la s)
    // protected $table = 'nombreTabla';

    // Atributos que se pueden insertar, modificar etc.
    protected $fillable = ['nombre', 'desc', 'categoria'];

    // Atributos que deben ocultarse al convertir a array/JSON
    // protected $hidden = ['password', 'remember_token'];
}
