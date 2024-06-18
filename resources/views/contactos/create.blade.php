@extends('layouts.app')

@section('content')

    <h1 class="titulo_formularios">Contacto</h1>
    <section>
        <div>

        </div>
        <div class="margin_container">
            <form method="POST" action="{{ route('contacto.store') }}" class="form_contacto">
            @csrf

                <input type="text" id="nombre" name="nombre" class="inputs_contacto" placeholder="Nombre">

                <input type="text" id="apellido" name="apellido" class="inputs_contacto" placeholder="Apellido">
                
                <input type="email" id="email" name="email" class="inputs_contacto" placeholder="Email">

                <input type="tel" id="telefono" name="telefono" class="inputs_contacto" placeholder="Numero de Telefono">

                <textarea id="mensaje" name="mensaje" rows="8" class="text_contacto inputs_contacto" placeholder="Deja tu mensaje..."></textarea>

                <button type="submit" class="boton_contacto">Enviar</button>
            </form>
    
        </div>
    </section>
     
    @endsection
