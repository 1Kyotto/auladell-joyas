@extends('template.master')

@section('contenido')
<div class="main col-span-6 bg-red-600">
	MAIN
	<div class="">
		<img src="" alt="Imagen" width="400" height="200" class="mx-auto block">
		{{--<img src="{{ asset('') }}" alt="Imagen" width="400" height="200" class="mx-auto block">--}}
	</div>
</div>

<div class="call-to-action col-span-6 bg-orange-900 grid grid-cols-3">
	<div class="col-span-1 col-start-2 grid grid-rows-3">
		<h2 class="row-span-1 text-3xl">
			Call-To-Action
		</h2>
		<div class="row-span-1">
			<p class="text-sm">
				para aprender
			</p>
		</div>
		<div class="row-span-1">
			<button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-white 
			font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none 
			dark:focus:ring-white">Si</button>
		</div>
	</div>
</div>

<div class="categorias col-span-6 bg-amber-600 grid grid-rows-1">
	<div class="row-span-1 grid grid-cols-8">
		<div class="col-span-2">0</div>
		<div class="col-span-1">Collares</div>
		<div class="col-span-1">Anillos</div>
		<div class="col-span-1">Aros</div>
		<div class="col-span-1">Brazaletes</div>
		<div class="col-span-2">0</div>
	  </div>
</div>

<div class="recomendaciones col-span-6 bg-lime-900 grid grid-rows-2">
	<div class="row-span-1">
		Recomendaciones
	</div>
	<div class="row-span-1 grid grid-cols-6">
		<div class="col-span-1">01</div>
		<div class="col-span-1">02</div>
		<div class="col-span-1">03</div>
		<div class="col-span-1">04</div>
		<div class="col-span-1">05</div>
		<div class="col-span-1">06</div>
	  </div>

</div>
@endsection