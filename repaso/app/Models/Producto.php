<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{ 
    use HasFactory;
    
    // Tabla si el nombre no sigue la convención (nombre en singular, sin la s)
    // protected $table = 'nombreTabla';

    // protected $primaryKey = "id"
    
    // Atributos que se pueden insertar, modificar etc.
    protected $fillable = ['nombre', 'desc', 'categoria'];

    // atributos que no se puedan modificar
    protected $guarded = ['id'];

    // Atributos que deben ocultarse al convertir a array/JSON
    // protected $hidden = ['password', 'remember_token'];
}
