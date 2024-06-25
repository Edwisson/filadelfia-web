@extends('layouts.app')

@section('content')


<h1 class="titulo_formularios">Registrar Asistencia</h1>
<section>
    <div>

    </div>
    <div class="margin_container">
        <form method="POST" action="{{ route('evento.store') }}" class="form_pequeño">
            @csrf

            {{-- <input type="text" id="tipo" name="tipo" class="inputs_evento" placeholder="Tipo de Evento"> --}}

            <select name="tipo" id="tipo" class="inputs_contacto">
                <option value="culto">Culto</option>
                <option value="vigilia">Vigilia</option>
                <option value="evangelismo">Evangelismo</option>
                <option value="bautizo">Bautizo</option>
            </select>

            <input type="date" id="fecha" name="fecha" class="inputs_contacto" placeholder="Fecha">
            {{-- Pero al menos el problema principal se resolvio rapido, creo que el link debe ser --}}

            <textarea id="ubicacion" name="ubicacion" class="inputs_contacto" placeholder="Ubicación del Evento"></textarea>

            <textarea id="descripcion" name="descripcion" rows="8" class="text_contacto inputs_contacto" placeholder="Descripción del Evento"></textarea>

            <button type="submit" class="boton_contacto">Crear Evento</button>
        </form>

    </div>
</section>
@endsection