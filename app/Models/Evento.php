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

    public function eventos()
    {
        return $this->belongsToMany(Evento::class, 'miebros-eventos')->withTimestamps();
    }

}