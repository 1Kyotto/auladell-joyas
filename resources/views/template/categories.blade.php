@extends('template.master')

@section('contenido')
<div class="main col-span-6 grid grid-rows-1">
    <div class="row-span-1">
        @yield('contenido-filtros')
    </div>
    <div class="row-span-1">
        @yield('contenido-joyas')
    </div>
</div>
@endsection