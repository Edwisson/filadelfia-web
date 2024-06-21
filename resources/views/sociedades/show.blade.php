@extends('layouts.app')

@section('content')

<section class="contenedor_mostrar_flex">
    <div class="mostrar_grande">
        <h1>{{ $sociedades->nombre }}</h1>
        <table class="mostrar_tabla">
            <tr>
                <td>Nombre</td>
                <td>{{ $sociedades->nombre }}</td>
            </tr>
            <tr>
                <td>Descripción</td>
                <td>{{ $sociedades->descripcion }}</td>
            </tr>
        </table>
    </div>
</section>

@endsection