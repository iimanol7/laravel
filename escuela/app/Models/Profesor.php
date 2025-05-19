<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profesor extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'profesion',
        'grado',
        'telefono'
    ];

    
    public function cursos(): HasMany
    {
        return $this->hasMany(Curso::class, 'profesor_id', 'id');
    }
}
