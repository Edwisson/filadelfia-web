@extends('layouts.app')

@section('content')
    <h1 class="titulo_listas">Miembros</h1>
    <section class="contenedor_listas margin_container">
        <table border="1" class="tabla_listas">

        @foreach($miembros as $miembro)
            <tr>

                <td class="contenido_listas">
                    <a href="{{ route('miembros.show', ['cedula' => $miembro->cedula]) }}"
                        >{{$miembro->nombres}} {{ $miembro->apellidos }} {{ $miembro->cedula}}
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


