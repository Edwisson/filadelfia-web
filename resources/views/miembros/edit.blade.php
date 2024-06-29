@extends('layouts.app')

@section('content')

<h1 class="titulo_formularios">Editar Informacion de Miembros</h1>
<section>
    <div>

    </div>
    <div class="margin_container">
        <form method="POST" action="{{ route('miembros.update', $miembros) }}" class="form_grande">
            @csrf
            @method('PUT')
            <input type="text" id="nombres" name="nombres" class="inputs_contacto" placeholder="Nombres" value="{{$miembros->nombres}}">

            <input type="text" id="apellidos" name="apellidos" class="inputs_contacto" placeholder="Apellidos" value="{{$miembros->apellidos}}">

            <input type="text" id="cedula" name="cedula" class="inputs_contacto" placeholder="Cédula" value="{{$miembros->cedula}}">

            <input type="text" id="direccion" name="direccion" class="inputs_contacto" placeholder="Dirección" value="{{$miembros->direccion}}">

            <input type="tel" id="telefono" name="telefono" class="inputs_contacto" placeholder="Número de Teléfono" value="{{$miembros->telefono}}">

            <!-- Campos adicionales -->
            <select id="estado_civil" name="estado_civil" class="inputs_contacto">
                <option value="" disabled selected>Estado Civil</option>
                <option value="soltero" @selected("soltero" == $miembros->estado_civil)>Soltero/a</option>
                <option value="casado" @selected("casado" == $miembros->estado_civil)>Casado/a</option>
                <option value="viudo" @selected("viudo" == $miembros->estado_civil)>Viudo/a</option>
            </select>

            <input type="number" id="edad" name="edad" class="inputs_contacto" placeholder="Edad" value="{{$miembros->edad}}">

            <select id="estado_salud" name="estado_salud" class="inputs_contacto">
                <option value="" disabled selected>Estado de Salud</option>
                <option value="bueno" @selected("bueno" == $miembros->estado_salud)>Bueno</option>
                <option value="regular" @selected("regular" == $miembros->estado_salud)>Regular</option>
                <option value="malo" @selected("malo" == $miembros->estado_salud)>Malo</option>
            </select>

            <textarea id="descripcion_salud" name="descripcion_salud" class="inputs_contacto" placeholder="Descripción del Estado de Salud"> {{$miembros->descripcion_salud}} </textarea>

            <select id="estado_economico" name="estado_economico" class="inputs_contacto">
                <option value="" disabled selected>Estado Económico</option>
                <option value="bueno" @selected("bueno" == $miembros->estado_economico)>Bueno</option>
                <option value="regular" @selected("regular" == $miembros->estado_economico)>Regular</option>
                <option value="malo" @selected("malo" == $miembros->estado_economico)>Malo</option>
            </select>

            <textarea id="descripcion_economica" name="descripcion_economica" class="inputs_contacto" placeholder="Descripción del Estado Económico"> {{$miembros->descripcion_economica}} </textarea>

            <textarea id="necesidades" name="necesidades" class="inputs_contacto" placeholder="Necesidades">{{$miembros->necesidades}}</textarea>

            <select id="bautizado" name="bautizado" class="inputs_contacto">
                <option value="" disabled selected>Bautizado</option>
                <option value="si" @selected("si" == $miembros->bautizado)>Sí</option>
                <option value="no" @selected("no" == $miembros->bautizado)>No</option>
            </select>

            <button type="submit" class="boton_contacto">Actualizar</button>
        </form>

    </div>
</section>

@endsection