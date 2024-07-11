@extends('layouts.app')

@section('content')

<h1 class="titulo_formularios">Sociedades</h1>
<section>
    <div>

    </div>
    <div class="margin_container">
        <form method="POST" action="{{ route('sociedades.store') }}" class="form_pequeño">
            @csrf

            <input type="text" id="nombre" name="nombre" class="inputs_contacto" placeholder="Nombre">
            <input type="number" id="pastor" name="pastor" class="inputs_contacto" placeholder="Cedula del Pastor">
            <input type="number" id="pastora" name="pastora" class="inputs_contacto" placeholder="cedula de la Pastora">
            <textarea id="descripcion" name="descripcion" rows="8" class="text_contacto inputs_contacto" placeholder="Deja tu mensaje..."></textarea>

            <button type="submit" class="boton_contacto">Enviar</button>
        </form>

    </div>
</section>

@endsection