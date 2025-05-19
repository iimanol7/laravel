<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'edad',
        'telefono',
        'direccion',
        'foto',
    ];

   
    public function cursos(): BelongsToMany
    {
        return $this->belongsToMany(Curso::class, 'alumno_curso', 'alumno_id', 'curso_id');
    }
}
