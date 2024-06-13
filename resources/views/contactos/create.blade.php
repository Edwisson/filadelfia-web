@extends('layouts.app')
<<<<<<< HEAD:resources/views/contactos.blade.php
=======

@section('title', 'Crear')

@section('content')
<a href="{{ route('contactos.index') }}">Inicio</a>
    <h1>Formulario de Contacto</h1>
    <form action="{{ route('contacto.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br><br>
>>>>>>> 773c907a2b097b807685bd5b381aa855d3e80eb4:resources/views/contactos/create.blade.php

@section('content')

    <h1>Contacto</h1>
    <section>
        <div>

        </div>
        <div class="margin_container">
            <form method="POST" action="" class="form_contacto">
            @csrf

                <input type="text" id="nombre" name="nombre" class="inputs_contacto" placeholder="Nombre">

<<<<<<< HEAD:resources/views/contactos.blade.php
                <input type="text" id="apellido" name="apellido" class="inputs_contacto" placeholder="Apellido">
                
                <input type="email" id="email" name="email" class="inputs_contacto" placeholder="Email">

                <input type="tel" id="telefono" name="telefono" class="inputs_contacto" placeholder="Numero de Telefono">

                <textarea id="mensaje" name="mensaje" rows="8" class="text_contacto inputs_contacto" placeholder="Deja tu mensaje..."></textarea>

                <button type="submit" class="boton_contacto">Enviar</button>
            </form>
    
        </div>
    </section>
     
    @endsection
=======
        <button type="submit">Enviar</button>
    </form>
@endsection
>>>>>>> 773c907a2b097b807685bd5b381aa855d3e80eb4:resources/views/contactos/create.blade.php
