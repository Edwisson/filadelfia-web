<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{

    public function index()
    {
        $contactos = Contacto::all();
        return view('contactos.read', compact('contactos')); 
    }



    public function intranetMensajes()
    {
        $contactos = Contacto::paginate(4);
        
        
        // Mostrar la vista 'intranet.mensajes'
        return view('intranet.mensajes', compact('contactos'));
    }





    public function create()
    {
        return view('contactos.create');
    }


    public function store(Request $request)
    {
        Contacto::create($request->all());

        return redirect()->route('contactos.read');
    }



    public function show($id)
    {
    $contactos = Contacto::findOrFail($id);
    
    return view('intranet.show', compact('contactos'));
    }


}


