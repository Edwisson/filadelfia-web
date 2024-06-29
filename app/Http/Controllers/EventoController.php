<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\MiembroEvento;

use Illuminate\Http\RedirectResponse;

class EventoController extends Controller
{
    public function lista()
    {
        $eventos = Evento::paginate(10);
        
        // Mostrar la vista mensajes
        return view('evento.lista', compact('eventos'));
    }

    public function create()
    {
        return view('evento.create');
    }

    public function store(Request $request)
    {
        Evento::create($request->all());

        return redirect()->route('evento.lista');
    }

    public function show($id)
    {
        $evento = Evento::findOrFail($id);
    
        return view('evento.show', compact('evento'));
    }

    public function asistencias(Evento $evento)
    {
        // Obtener las asistencias directamente usando el modelo pivote
        $asistencias = MiembroEvento::where('evento', $evento->id)
                                   ->join('miembros', 'miembros-eventos.miembro', '=', 'miembros.cedula')
                                   ->select('miembros.*')
                                   ->get();
        $totalAsistencias = $asistencias->count();

        return view('evento.listaAsistencias', compact('asistencias','evento', 'totalAsistencias'));
    }

    public function update(Request $request, Evento $evento): RedirectResponse
    {
        //validacion:

        $evento->update($request->all());
        return redirect()->route('evento.mensajes')->with('success', 'Nueva tarea actualizada exitosamente!');
    }

}



