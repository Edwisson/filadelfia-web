@extends('layouts.app')

@section('content')

<h1 class="titulo_formularios">Editar Sociedad</h1>
<section>
    <div class="margin_container">
        <form method="POST" action="{{ route('sociedades.update', $sociedad->nombre) }}" class="form_pequeño">
            @csrf
            @method('PUT')


            <input type="text" id="nombre" name="nombre" class="inputs_contacto" placeholder="Nombre" value="{{ $sociedad->nombre }}">
            <input type="number" id="pastor" name="pastor" class="inputs_contacto" placeholder="Cedula del Pastor" value="{{ $sociedad->pastor }}">
            <input type="number" id="pastora" name="pastora" class="inputs_contacto" placeholder="Cedula de la Pastora" value="{{ $sociedad->pastora }}">
            <textarea id="descripcion" name="descripcion" rows="8" class="text_contacto inputs_contacto" placeholder="Descripción...">{{ $sociedad->descripcion }}</textarea>

            <button type="submit" class="boton_contacto">Actualizar</button>
        </form>
    </div>
</section>

@endsection
