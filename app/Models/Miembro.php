<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    use HasFactory;

    protected $table = 'miembros';

    protected $primaryKey = 'cedula'; // Especifica que cedula es la clave primaria, tenia que poner esto porque me daba error

    public $incrementing = false; // Indica que no se debe incrementar automáticamente, ya que la cedula es un dato que insertaremos
    protected $keyType = 'string'; // Asegúrate de especificar el tipo de clave primaria

    protected $fillable = [
        'cedula',
        'nombres',
        'apellidos',
        'direccion',
        'telefono',
        'estado_civil',
        'edad',
        'estado_salud',
        'descripcion_salud',
        'estado_economico',
        'descripcion_economica',
        'necesidades',
        'bautizado',
        'genero',
        'sociedad_id',
    ];
    public function miembros()
    {
        return $this->belongsToMany(Miembro::class, 'miembros-eventos')->withTimestamps();
    }
}
