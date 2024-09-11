@extends('template.master')

@section('contenido')
<div class="main col-span-6 grid grid-cols-6">
    <div class="col-span-2 bg-orange-700">
        @yield('contenido-filtros')
    </div>
    <div class="col-span-4 bg-amber-500">
        @yield('contenido-joyas')
    </div>
</div>
@endsection