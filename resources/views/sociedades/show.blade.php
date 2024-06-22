@extends('layouts.app')

@section('content')

<section class="contenedor_mostrar_flex">
    <div class="mostrar_grande">
        <h1>{{ $sociedades->nombre }}</h1>
    </div>
</section>

@endsection