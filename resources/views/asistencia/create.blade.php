@extends('layouts.app')

@section('content')


<h1 class="titulo_formularios">Registrar Asistencia</h1>
<section>
    <div>

    </div>
    <div class="margin_container">
        <form method="POST" action="{{ route('asistencia.store') }}" class="form_pequeño">
            @csrf

            <input type="number" id="miembro_id" name="miembro_id" class="inputs_contacto" placeholder="Cedula"> 
            <select name="tipo" id="tipo" class="inputs_contacto">

                <option value="culto">Culto</option>
                <option value="vigilia">Vigilia</option>
                <option value="evangelismo">Evangelismo</option>
                <option value="bautizo">Bautizo</option>

            </select>

            <input type="date" id="fecha" name="fecha" class="inputs_contacto" placeholder="Fecha">

            <button type="submit" class="boton_contacto">Crear Evento</button>
        </form>

    </div>
</section>
@endsection