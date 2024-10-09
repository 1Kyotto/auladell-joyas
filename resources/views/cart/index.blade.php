@extends('template.master')

@section('contenido')
<div class="main col-span-6 grid grid-cols-9 bg-white h-screen">
	<div class="col-span-7 col-start-2 grid grid-cols-7 bg-[#87A196] h-full">
		<div class="col-span-4 overflow-y-auto bg-white mx-3 max-h-screen">
			{{--TextoEjemplo--}}
			<div class="py-1 grid grid-cols-8">
				<div class="col-span-1 text-3xl text-start pl-5 font-semibold">Carrito:</div>
				<div class="col-span-3 text-lg font-semibold pl-6">Producto</div>
				<div class="col-span-2 text-lg text-start font-semibold pl-9">Cantidad</div>
				<div class="col-span-1 col-start-7 text-lg text-start font-semibold">Precio</div>
			</div>
			<hr class="border-black">
			{{--sector sin card--}}
			
			{{--Card con datos--}}
			<div class="pb-10 pt-8 px-1">
				<div class="flex-col items-center bg-white border border-gray-200 shadow md:flex-row rounded-xl 
				 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-full
				 grid grid-cols-6 text-white">
				 	<div class="col-span-1">
						<img src="{{asset('images/gato1.jpg')}}" class=" rounded-xl ring-4 ring-white">
					</div>
					<div class="col-span-1 grid grid-rows-3 h-full">
						<div class="row-span-1 flex justify-center items-center font-semibold h-full">Gato anillo</div>
						<div class="row-span-2 flex justify-start items-start px-2 text-xs text-justify whitespace-normal w-full">Aqui una pequeña descripcion como por ejemplo el tamaño del producto</div>
					</div>
					<p class="col-span-1 flex justify-start items-start text-justify break-words text-sm overflow-y-auto max-h-28 max-w-full min-w-5 p-1">
						Un texto para describir datos y detalles del objeto que está en el carro de compra.
					</p>
					<div class="col-span-1 ml-5">cantidad</div>
					<div class="col-span-1 text-end pr-3">precio</div>
					<div class="col-span-1 text-end mr-8">borrar</div>
				</div>
			</div>
			{{--Card con datos--}}
			<div class="py-10 px-1">
				<div class="flex-col items-center bg-white border border-gray-200 shadow md:flex-row rounded 
				 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-full
				 grid grid-cols-6 text-white">
				 	<div class="col-span-1">
						<img src="{{asset('images/gato1.jpg')}}" class="rounded">
					</div>
					<div class="col-span-2">nombre y desc</div>
					<div class="col-span-1">cantidad</div>
					<div class="col-span-1">precio</div>
					<div class="col-span-1">borrar</div>
				</div>
			</div>
			{{--Card con datos--}}
			<div class="py-10 px-1">
				<div class="flex-col items-center bg-white border border-gray-200 shadow md:flex-row rounded 
				 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-full
				 grid grid-cols-6 text-white">
				 	<div class="col-span-1">
						<img src="{{asset('images/gato1.jpg')}}" class="rounded">
					</div>
					<div class="col-span-2">nombre y desc</div>
					<div class="col-span-1">cantidad</div>
					<div class="col-span-1">precio</div>
					<div class="col-span-1">borrar</div>
				</div>
			</div>
			{{--Card con datos--}}
			<div class="py-10 px-1">
				<div class="flex-col items-center bg-white border border-gray-200 shadow md:flex-row rounded 
				 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-full
				 grid grid-cols-6 text-white">
				 	<div class="col-span-1">
						<img src="{{asset('images/gato1.jpg')}}" class="rounded">
					</div>
					<div class="col-span-2">nombre y desc</div>
					<div class="col-span-1">cantidad</div>
					<div class="col-span-1">precio</div>
					<div class="col-span-1">borrar</div>
				</div>
			</div>
			{{--Card con datos--}}
			<div class="py-10 px-1">
				<div class="flex-col items-center bg-white border border-gray-200 shadow md:flex-row rounded 
				 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-full
				 grid grid-cols-6 text-white">
				 	<div class="col-span-1">
						<img src="{{asset('images/gato1.jpg')}}" class="rounded">
					</div>
					<div class="col-span-2">nombre y desc</div>
					<div class="col-span-1">cantidad</div>
					<div class="col-span-1">precio</div>
					<div class="col-span-1">borrar</div>
				</div>
			</div>
		</div>

		<div class="col-span-3 grid grid-rows-5 bg-[#87A196] pr-3">
			<div class="row-span-1 flex items-center justify-center">
				<h2 class="text-4xl text-center">Continuar con la compra.</h2>
			</div>
			{{--Card de datos--}}
			<div class="row-span-3 row-start-2">
				<div class="w-full bg-white border border-black 
				rounded-lg shadow  dark:border-gray-700">
					<div class="flex justify-center p-4">
						An order summary is a document that confirms the details of your order. 
						Incluye informacion sobre los items que pediste, costo total, direccion de envio, y metodo de pago.
					</div>
					<div class="flex justify-center p-2 text-2xl">
						Precio total a pagar
					</div>
					<hr class="border-black">
					<div class="flex flex-col items-center py-4">
						<img class="w-24 h-24 m-3 rounded-full ring-4 ring-black" src="{{asset('images/gato1.jpg')}}" alt="gato"/>
						<h5 class="mb-1 text-xl font-medium text-black">Gato web</h5>
						<span class="text-sm text-black">Visual Designer</span>
						<div class="flex mt-4 md:mt-6"></div>
					</div>
					<hr class="border-black">
					<div class="flex justify-center p-4">
						<a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 
						focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Confirmar compra</a>
						<a href="#" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 
						focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Ingresar código desc.</a>
					</div>
				</div>
			</div>
			{{--Card de datos--}}
		</div>
	</div>
</div>
@endsection