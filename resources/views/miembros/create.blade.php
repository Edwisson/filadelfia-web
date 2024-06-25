@extends('layouts.app')

@section('content')

<h1 class="titulo_formularios">Miembros</h1>
<section>
    <div>

    </div>
    <div class="margin_container">
        <form method="POST" action="{{ route('miembros.store') }}" class="form_grande">
            @csrf
            <input type="text" id="nombres" name="nombres" class="inputs_contacto" placeholder="Nombres" required>

            <input type="text" id="apellidos" name="apellidos" class="inputs_contacto" placeholder="Apellidos" required>

            <input type="number" id="cedula" name="cedula" class="inputs_contacto" placeholder="Cédula" required>

            <input type="text" id="direccion" name="direccion" class="inputs_contacto" placeholder="Dirección" required>

            <input type="tel" id="telefono" name="telefono" class="inputs_contacto" placeholder="Número de Teléfono" required>

            <!-- Campos adicionales -->
            <select id="estado_civil" name="estado_civil" class="inputs_contacto" required>
                <option value="" disabled selected>Estado Civil</option>
                <option value="soltero">Soltero/a</option>
                <option value="casado">Casado/a</option>
                <option value="viudo">Viudo/a</option>
            </select>

            <input type="number" id="edad" name="edad" class="inputs_contacto" placeholder="Edad" required>

            <select id="estado_salud" name="estado_salud" class="inputs_contacto" required>
                <option value="" disabled selected>Estado de Salud</option>
                <option value="bueno">Bueno</option>
                <option value="regular">Regular</option>
                <option value="malo">Malo</option>
            </select>

            <textarea id="descripcion_salud" name="descripcion_salud" class="inputs_contacto" placeholder="Descripción del Estado de Salud"></textarea>

            <select id="estado_economico" name="estado_economico" class="inputs_contacto" required>
                <option value="" disabled selected>Estado Económico</option>
                <option value="bueno">Bueno</option>
                <option value="regular">Regular</option>
                <option value="malo">Malo</option>
            </select>

            <textarea id="descripcion_economica" name="descripcion_economica" class="inputs_contacto" placeholder="Descripción del Estado Económico"></textarea>

            <textarea id="necesidades" name="necesidades" class="inputs_contacto" placeholder="Necesidades"></textarea>

            <select id="bautizado" name="bautizado" class="inputs_contacto" required>
                <option value="" disabled selected>Bautizado</option>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>

            <select id="genero" name="genero" class="inputs_contacto" required>
                <option value="" disabled selected>género</option>
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
            </select>

            <button type="submit" class="boton_contacto">Enviar</button>
        </form>

    </div>
</section>

@endsection
