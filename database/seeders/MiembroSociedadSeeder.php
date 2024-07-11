<?php

namespace Database\Seeders;

use App\Models\Miembro;
use App\Models\MiembroSociedad;
use App\Models\Sociedad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MiembroSociedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $miembro = Miembro::first();
        $sociedades = Sociedad::first();
        MiembroSociedad::create([
            'miembro' => $miembro->cedula,
            'cargo' => 'Cargo de Prueba',
            'sociedad' => $sociedades->nombre
        ]); 
    }
}


