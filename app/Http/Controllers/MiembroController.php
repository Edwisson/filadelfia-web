<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Miembro;
class MiembroController extends Controller
{

   

    public function mensajes()
    {
        $miembros = Miembro::paginate(10);
        
        
        // Mostrar la vista mensajes'
        return view('miembros.miembros', compact('miembros'));
    }

    public function create()
    {
        return view('miembros.create');
    }

    public function store(Request $request)
    {
        Miembro::create($request->all());

        return redirect()->route('miembros.miembros');
        
    }

    public function show($cedula)
    {
    $miembros = Miembro::findOrFail($cedula);
    
    return view('miembros.show', compact('miembros'));
    }

    public function determinarSociedad($genero, $edad)
{
    switch ($edad) {
        case 'sociedad':
            switch (true) {
                case $edad >= 0 && $edad <= 8:
                    return 'Niños';
                    
                case $edad >= 9 && $edad <= 11:
                    return 'Preadolescentes';
                    
                case $edad >= 12 && $edad <= 17:
                    return 'Adolescentes';
                    
                case $edad >= 18 && $edad <= 29:
                    return 'Jóvenes';
                    
                case $edad >= 30:
                    return 'Caballeros y damas';
                    
                default:
                    return 'No pertenece a ninguna sociedad.';
            }
            
        
    }
}
    
}

