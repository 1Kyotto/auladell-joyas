@extends('template.master')

@section('contenido')
<div class="main col-span-6 grid grid-cols-9 bg-white h-screen">
	<div class="col-span-7 col-start-2 grid grid-cols-7 bg-[#87A196] h-full">
		<div class="col-span-4 overflow-y-auto bg-white mx-3 max-h-screen">
			{{--TextoEjemplo--}}
			<div class="py-1 grid grid-cols-8">
				<div class="col-span-1 text-3xl text-start pl-5 font-semibold">Carrito:</div>
				<div class="col-span-3 text-lg font-semibold pl-6">Producto</div>
				<div class="col-span-2 text-lg text-start font-semibold pl-10">Cantidad</div>
				<div class="col-span-1 col-start-7 text-center font-semibold pr-8"><span class="text-lg">Precio</span></div>
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
					<div class="col-span-1 ml-12">cantidad</div>
					<div class="col-span-1 text-end">precio</div>
					<div class="col-span-1 text-end mr-4">borrar</div>
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
					<div class="flex justify-center items-center p-2 text-2xl">
						Precio total del carrito
						<svg xmlns="http://www.w3.org/2000/svg" class="text-black ml-2 mt-1" viewBox="0 0 24 24" width="24" height="24" color="#ffffff" fill="none">
							<path d="M16.6667 14L7.33333 14C5.14718 14 4.0541 14 3.27927 14.5425C2.99261 14.7433 2.74327 14.9926 2.54254 15.2793C2 16.0541 2 17.1472 2 19.3333C2 20.4264 2 20.9729 2.27127 21.3604C2.37164 21.5037 2.4963 21.6284 2.63963 21.7287C3.02705 22 3.57359 22 4.66667 22L19.3333 22C20.4264 22 20.9729 22 21.3604 21.7287C21.5037 21.6284 21.6284 21.5037 21.7287 21.3604C22 20.9729 22 20.4264 22 19.3333C22 17.1472 22 16.0541 21.4575 15.2793C21.2567 14.9926 21.0074 14.7433 20.7207 14.5425C19.9459 14 18.8528 14 16.6667 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
							<path d="M20 14L19.593 10.3374C19.311 7.79863 19.1699 6.52923 18.3156 5.76462C17.4614 5 16.1842 5 13.6297 5L10.3703 5C7.81585 5 6.53864 5 5.68436 5.76462C4.83009 6.52923 4.68904 7.79862 4.40695 10.3374L4 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
							<path d="M11.5 2H14M16.5 2H14M14 2V5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
							<path d="M9 17.5L9.99615 18.1641C10.3247 18.3831 10.7107 18.5 11.1056 18.5H12.8944C13.2893 18.5 13.6753 18.3831 14.0038 18.1641L15 17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
							<path d="M8 8H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
						</svg>
					</div>
					<hr class="border-black pb-4">
					<div class="grid flex-col items-center grid-cols-3 grid-rows-2 pb-4">
						<span class="col-span-2 row-span-1 text-md text-center font-bold py-3">Subtotal de productos:</span>
						<span class="col-span-1 row-span-1 text-md text-start font-semibold py-3">$0000.00</span>
						<span class="col-span-2 row-span-2 text-md text-center font-bold py-3">IVA del subtotal:</span>
						<span class="col-span-1 row-span-2 text-md text-start font-semibold py-3">$0000.00</span>
					</div>
					<hr class="border-black">
					<div class="grid grid-cols-3">
						<span class="col-span-2 text-md text-center font-bold py-3">Precio total:</span>
						<span class="col-span-1 text-md text-start font-semibold py-3">$00000.00</span>
					</div>
					<hr class="border-black">
					<div class="grid grid-rows-2 items-center justify-center py-4">
						<button href="#" class="row-span-1 font-medium flex items-center justify-center text-sm rounded-lg text-center px-20 py-1 my-1 text-white bg-blue-700 hover:bg-blue-800 
						focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Confirmar la compra
						<svg xmlns="http://www.w3.org/2000/svg" class="text-white pl-1" viewBox="0 0 24 24" width="24" height="24" fill="none">
							<path d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z" stroke="currentColor" stroke-width="1.5" />
							<path d="M8 12.5L10.5 15L16 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						</button>

						<button href="#" class="row-span-1 font-medium flex items-center justify-center text-sm rounded-lg text-center px-20 py-1 my-1 text-white bg-blue-700 hover:bg-blue-800 
						focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Ingresar código de desc. 
						<svg xmlns="http://www.w3.org/2000/svg" class="text-white pl-1" viewBox="0 0 24 24" width="24" height="24" fill="none">
							<path d="M17.5 17.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
							<path d="M7.5 11L14.5 11M11 7.5V14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						</button>
					</div>
				</div>
			</div>
			{{--Card de datos--}}
		</div>
	</div>
</div>
@endsection