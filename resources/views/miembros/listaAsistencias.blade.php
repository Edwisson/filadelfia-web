@extends('layouts.app')

@section('content')
<section class="margin_container info_listas ">
    <h1>{{ $miembro->nombres }} <span>{{ $miembro->apellidos }}</span></h1>
    <p class="contenido_listas">Asistencias totales: {{ $totalAsistencias}} </p>
</section>
<section class="contenedor_listas margin_container">
    <table border="1" class="tabla_listas">

        @foreach($asistencias as $asistencia)
        <tr>
            <td class="contenido_listas">
                <a href="{{ route('evento.show', ['id' => $asistencia->id]) }}">
                    {{ $asistencia->tipo }}
                    {{ $asistencia->fecha }}
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="boton"> <a href="{{ url()->previous() }}">Volver</a></div>
</section>


@endsection