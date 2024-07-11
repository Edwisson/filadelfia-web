@extends('layouts.app')

@section('content')


<h1 class="titulo_formularios">Eventos</h1>
<section>
    <div>

    </div>
    <div class="margin_container">
    <form method="POST" action="{{ route('evento.update', $evento) }}" class="form_pequeño">
            @csrf
            @method('PUT')
            {{-- <input type="text" id="tipo" name="tipo" class="inputs_evento" placeholder="Tipo de Evento"> --}}

            <select name="tipo" id="tipo" class="inputs_contacto">
                <option value="culto" @selected("culto" == $evento->culto)>Culto</option>
                <option value="vigilia" @selected("vigilia" == $evento->vigilia)>Vigilia</option>
                <option value="evangelismo" @selected("evangelismo" == $evento->evangelismo)>Evangelismo</option>
                <option value="bautizo" @selected("bautizo" == $evento->bautizado)>Bautizo</option>
            </select>

            <input type="date" id="fecha" name="fecha" class="inputs_contacto" placeholder="Fecha" value= "{{$evento->fecha}}">
            {{-- Pero al menos el problema principal se resolvio rapido, creo que el link debe ser --}}

            <textarea id="ubicacion" name="ubicacion" class="inputs_contacto" placeholder="Ubicación del Evento">{{$evento->ubicacion}}</textarea>

            <textarea id="descripcion" name="descripcion" rows="8" class="text_contacto inputs_contacto" placeholder="Descripción del Evento">{{$evento->descripcion}}</textarea>

            <button type="submit" class="boton_contacto">Editar Evento</button>
        </form>

    </div>
</section>
@endsection