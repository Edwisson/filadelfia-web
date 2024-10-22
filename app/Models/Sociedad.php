<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sociedad extends Model
{
    use HasFactory;


    protected $table = 'sociedades';
    protected $primaryKey = 'nombre';
    public $incrementing = false; // Si 'nombre' no es auto-incremental
    protected $keyType = 'string'; 


    protected $fillable = [
        'nombre',
        'descripcion',
        'n_miembros',
        'pastor',
        'pastora',
    ];

    public function miembrosSociedad()
    {
        return $this->hasMany(MiembroSociedad::class, 'sociedad', 'nombre');
    }

    
}
