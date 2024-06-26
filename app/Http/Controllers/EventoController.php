<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Http\RedirectResponse;

class EventoController extends Controller
{
    public function mensajes()
    {
        $eventos = Evento::paginate(10);
        
        // Mostrar la vista mensajes
        return view('evento.mensajes', compact('eventos'));
    }

    public function create()
    {
        return view('evento.create');
    }

    public function store(Request $request)
    {
        Evento::create($request->all());

        return redirect()->route('evento.mensajes');
    }

    public function show($id)
    {
        $evento = Evento::findOrFail($id);
    
        return view('evento.show', compact('evento'));
    }

    
    public function edit(Evento $evento)
    {
        return view('evento.edit', ['evento' => $evento]);
    }

   
    public function update(Request $request, Evento $evento): RedirectResponse
    {
        //validacion:

        $evento->update($request->all());
        return redirect()->route('evento.mensajes')->with('success', 'Nueva tarea actualizada exitosamente!');
    }

}



