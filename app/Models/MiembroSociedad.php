<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiembroSociedad extends Model
{
    use HasFactory;

    protected $table = 'miembro_sociedades';
    protected $fillable = [
        'miembro',
        'sociedad',
    ];

    public function miembro()
    {
        return $this->belongsTo(Miembro::class, 'miembro', 'cedula');
    }

    public function sociedad()
    {
        return $this->belongsTo(Sociedad::class, 'sociedad', 'nombre');
    }
}
