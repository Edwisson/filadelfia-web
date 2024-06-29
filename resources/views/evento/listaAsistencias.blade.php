@extends('layouts.app')

@section('content')
<section class="margin_container info_listas ">
    <h1>{{ $evento->tipo }} <span>{{ $evento->fecha }}</span></h1>
    <p class="contenido_listas">Asistencias totales: {{ $totalAsistencias}} </p>
</section>
<section class="contenedor_listas margin_container">
    <table border="1" class="tabla_listas">

        @foreach($asistencias as $asistencia)
        <tr>
            <td class="contenido_listas">
                <a href="#">
                    {{ $asistencia->nombres }}
                    {{ $asistencia->apellidos }}
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</section>


@endsection