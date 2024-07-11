@extends('layouts.app')

@section('content')

<h1 class="titulo_listas">Sociedades</h1>
<section class="contenedor_listas margin_container">
    <table border="1" class="tabla_listas">

        @foreach($sociedades as $sociedad)
        <tr>
            <td class="contenido_listas">
                <a href="{{ route('sociedades.show', ['nombre' => $sociedad->nombre])}}">
                    <p>
                        {{ $sociedad->nombre }}
                    </p>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="boton">
        <a href="{{ url()->previous() }}">Volver</a>
        <a href="{{ route('sociedades.create')}}">Crear</a>
    </div>
</section>

{{ $sociedades->links() }}
@endsection