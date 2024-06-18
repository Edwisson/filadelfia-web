@extends('layouts.app')

@section('content')
    <h1>Lista de Mensajes</h1>
    <section class="contenedor_tabla_mensajes margin_container">
        <table border="1" class="tabla_mensajes">

        @foreach($miembros as $miembro)
            <tr>

                <td class="contenido_mensajes">
                    <a href="{{ route('miembros.show', ['cedula' => $miembro->cedula]) }}">{{$miembro->nombres}} {{ $miembro->apellidos }} {{ $miembro->cedula}}</a>
                    <p>
                        {{ $miembro->created_at }}
                    </p> 
                </td>
                
            </tr>
        @endforeach
    </table>
    </section>
    
    {{ $miembros->links() }}
@endsection


