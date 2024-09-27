@extends('template.dashboard')

@section('contenido')
<div class="col-span-10 h-[100vh] flex items-center justify-center">
	{{--Container--}}
	<div class="w-[95%] h-[95%] border border-gray-200 rounded-lg flex flex-col items-center">
		<div class="w-[95%] h-[10%] flex items-center justify-between">
			<div class=""></div>
			<a href="{{ route('product.create') }}" class="rounded-full py-2 px-4 bg-color-aux hover:bg-color-secondary text-aux">Nuevo Producto</a>
		</div>

		{{--FILTROS--}}
		<div class="w-[95%] h-[10%] flex items-center justify-start">
			<div class="border bg-gray-200 rounded-lg">
				<button class="hover:bg-white hover:rounded-xl px-5 py-1">Todo</button>
				<button class="hover:bg-white hover:rounded-xl px-5 py-1">Aros</button>
				<button class="hover:bg-white hover:rounded-xl px-5 py-1">Anillos</button>
				<button class="hover:bg-white hover:rounded-xl px-5 py-1">Brazaletes</button>
				<button class="hover:bg-white hover:rounded-xl px-5 py-1">Collares</button>
			</div>
		</div>
		{{--FILTROS--}}

		{{--LISTADO DE PRODUCTOS--}}
		<div class="w-[95%] h-[78%] flex flex-wrap justify-between overflow-hidden overflow-y-scroll">
			@foreach ($products as $product)
				{{--PRODUCTO--}}
				<div class="w-[30%] h-[80%] border border-gray-200 rounded-xl mb-8 flex flex-col items-center">
					<div class="w-[90%] h-[20%] flex">
						<div class="flex justify-between items-center w-full">
							{{--BOTÓN EDITAR--}}
							<a href="" class="border-2 max-w-64 min-w-32 rounded-lg py-1 px-2 bg-yellow-600 text-aux">Editar</a>
							
							{{-- TOGGLE SWITCH BOTÓN --}}
							<label class="inline-flex items-center cursor-pointer">
								<input type="checkbox" value="" class="sr-only peer" />
								<div class="relative w-9 h-4 bg-gray-200 peer-focus:outline-none peer-focus:ring-0 dark:peer-focus:ring-0 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-5 peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-3 after:w-3 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
							</label>
							{{-- TOGGLE SWITCH BOTÓN --}}
						</div>
					</div>
					<img src="" alt="" class="w-[90%] border h-[50%] mb-4">
					<div class="w-[90%] h-[35%] flex flex-col items-start justify-between">
						<h6>{{ $product->name }}</h6>
						<span>${{ number_format($product->base_price, 0) }}</span>
						<p>{{ $product->category }}</p>
					</div>
				</div>
				{{--PRODUCTO--}}
			@endforeach
		</div>
		{{--LISTADO DE PRODUCTOS--}}
	</div>
	{{--Container--}}
</div>
@endsection