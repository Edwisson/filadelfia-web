<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MiembroEvento extends Model
{
    protected $table = 'miembros-eventos';
    public $timestamps = true;
    protected $fillable = ['miembro', 'evento'];

    // Desactivar autoincremento de clave primaria
    public $incrementing = false;
    protected $primaryKey = null;

    // Opcional: Si tienes campos adicionales que no quieres manejar en masa
    protected $guarded = [];
}
