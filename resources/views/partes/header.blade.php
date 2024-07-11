<header>
    <div class="contenedor margin_container">
        <img src="{{ asset('images/logo.png') }}" alt="Filadelfia" class="logo">
        <nav class="navegacion_principal">
            <a href="{{route('contacto.mensajes')}}">Mensajes</a>
            <a href="{{route('miembros.miembros')}}">Miembros</a>
            <a href="{{route('sociedades.lista')}}">Sociedades</a>
            <a href="{{route('evento.lista')}}">Eventos</a>
            <a href="{{route('asistencia.create')}}">Asistencias</a>
        </nav>
    </div>
</header>