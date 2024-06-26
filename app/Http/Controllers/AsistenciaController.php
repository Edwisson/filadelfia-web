<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Miembro;
use App\Models\Evento;
use DateTime;

class AsistenciaController extends Controller
{
    public function create(){
        return view('asistencia.create');
    }

    public function store(Request $request)
    { 
        $data = $request->all();
        $data['miembro_id'] = (int) $data['miembro_id'];
        $data['fecha'] = new DateTime($data['fecha']);
        
        $evento = Evento::where('fecha', $data['fecha'])->where('tipo', $request->input('tipo'))->firstOrFail();

        $miembro = Miembro::findOrFail($request->input('miembro_id'));

        $miembro->eventos()->attach($evento->id);

        return redirect()->route('asistencia.create')->with('success', 'Asistencia registrada correctamente.');
    }

}
