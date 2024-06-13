<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{

    public function index()
    {
        $contactos = Contacto::all();
        
        return view('contactos.index', compact('contactos'));
    
    
    }


    public function create()
    {
        return view('contactos.create');
    }


    public function store(Request $request)
    {
        Contacto::create($request->all());

        return redirect()->route('contactos.index');
    }

}
