<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';
    
    protected $fillable = [
        'tipo',
        'fecha',
        'ubicacion',
        'descripcion'
    ];

    public function miembros()
    {
        return $this->belongsToMany(Miembro::class, 'miembros-eventos', 'evento', 'miembros')->withTimestamps();
    }

}