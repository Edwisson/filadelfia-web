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
        return view('miembros.mensajes', compact('miembros'));
    }




    public function create()
    {
        return view('miembros.create');
    }

    public function store(Request $request)
    {
        Miembro::create($request->all());

        return redirect()->route('miembros.mensajes');
        
    }

    public function show($cedula)
    {
    $miembros = Miembro::findOrFail($cedula);
    
    return view('miembros.show', compact('miembros'));
    }
}