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

            @foreach ($sociedades->miembrosSociedad as $miembro)
                <tr>
                    <td>Miembros</td>
                    <td>{{ $miembro->miembro }}</td>
                </tr>

                <tr>
                    <td>Cargo</td>
                    <td>{{ $miembro->cargo }}</td>
                </tr>

                <tr>
                    <td>Sociedad</td>
                    <td>{{ $miembro->sociedad }}</td>
                </tr>
            @endforeach

        </table>
    </div>
</section>

@endsection