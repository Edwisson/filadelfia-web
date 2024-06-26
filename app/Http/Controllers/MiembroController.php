<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\View;
use Illuminate\Http\RedirectResponse;
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


    public function edit(Miembro $miembros)
    {
        return view('miembros.edit', ['miembros' => $miembros]);
    }

   
    public function update(Request $request, Miembro $miembros): RedirectResponse
    {
        //validacion:

        $miembros->update($request->all());
        return redirect()->route('miembros.miembros')->with('success', 'Nueva tarea actualizada exitosamente!');
    }

}