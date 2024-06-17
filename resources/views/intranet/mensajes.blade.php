@extends('layouts.app')

@section('content')
    <h1>Lista de Mensajes</h1>
    <section class="contenedor_tabla_mensajes margin_container">
        <table border="1" class="tabla_mensajes">

        @foreach($contactos as $contacto)
            <tr>

                <td class="contenido_mensajes">
                    <a href="{{ route('intranet.show', ['id' => $contacto->id]) }}">{{$contacto->nombre}} {{ $contacto->apellido }}</a>
                    <p>
                        {{ $contacto->created_at }}
                    </p> 
                </td>
                
            </tr>
        @endforeach
    </table>
    </section>
    
    {{ $contactos->links() }}
@endsection


