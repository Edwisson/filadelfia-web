@extends('layouts.app')

@section('content')
<section class="margin_container info_listas ">
<h1>Miembros</h1>
<p class="contenido_listas">Miembros totales: {{ $totalMiembros}} </p>
</section>

<section class="contenedor_listas margin_container">
    <table border="1" class="tabla_listas">

    @foreach($miembros as $miembro)
        <tr>

            <td class="contenido_listas">
                <a href="{{ route('miembros.show', ['cedula' => $miembro->cedula]) }}">{{$miembro->nombres}} {{ $miembro->apellidos }} {{ $miembro->cedula}}
                    <p>
                        {{ $miembro->created_at }}
                    </p>
                </a>
            </td>

        </tr>
        @endforeach
    </table>
    
</section>

{{ $miembros->links() }}

@endsection

