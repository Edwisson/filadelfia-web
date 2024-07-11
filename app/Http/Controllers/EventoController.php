<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\MiembroEvento;

use Illuminate\Http\RedirectResponse;

class EventoController extends Controller
{
    public function lista() //muestra la lista de eventos
    {
        $eventos = Evento::paginate(10);
        return view('evento.lista', compact('eventos'));
    }

    public function create() //retorna a la vista con el formulario para crear un evento
    {
        return view('evento.create');
    }

    public function store(Request $request) //registra el evento
    {
        Evento::create($request->all());

        return redirect()->route('evento.lista');
    }

    public function show($id) //muestra la informacion de un evento
    {
        $evento = Evento::findOrFail($id);
    
        return view('evento.show', compact('evento'));
    }

    public function asistencias(Evento $evento) //muestra las asistencias de un evento
{
    // Obtener el término de búsqueda de la solicitud
    $query = request('query');

    $asistenciasQuery = MiembroEvento::where('evento', $evento->id)
                                     ->join('miembros', 'miembros-eventos.miembro', '=', 'miembros.cedula')
                                     ->select('miembros.*');

    // Si hay una consulta de búsqueda, añade filtros
    if ($query) {
        $asistenciasQuery->where(function ($subQuery) use ($query) {
            $subQuery->where('miembros.nombres', 'like', "%{$query}%")
                     ->orWhere('miembros.apellidos', 'like', "%{$query}%")
                     ->orWhere('miembros.cedula', 'like', "%{$query}%");
        });
    }

    // Obteniene los resultados
    $asistencias = $asistenciasQuery->get();
    $totalAsistencias = $asistencias->count();

    return view('evento.listaAsistencias', compact('asistencias', 'evento', 'totalAsistencias', 'query'));
}

    public function update(Request $request, Evento $evento): RedirectResponse //actualiza la información de un evento
    {
        //validacion:

        $evento->update($request->all());
        return redirect()->route('evento.lista')->with('success', 'Nueva tarea actualizada exitosamente!');
    }

    public function edit(Evento $evento)  //retorna al formulario para editar un evento
    {
        return view('evento.edit', compact('evento'));
    }
}

