@extends('template.master')

@section('contenido')
<div class="main col-span-6 grid grid-cols-6 bg-red-600">
	<div class="col-span-4 grid grid-rows-1 bg-teal-400">
		<div class="row-span-1 grid grid-cols-5">
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
		</div>
		<div class="row-span-1 grid grid-cols-5">
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
		</div>
		<div class="row-span-1 grid grid-cols-5">
			<div class="col-span-1"></div>
			<div class="col-span-3">
				
				<div class="w-full max-w-xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
					
					<img class="rounded-t-lg xl:p-12" src="{{ asset('images/thomas-y-percy.jpg') }}" alt="product image" />
					
					<div class="px-5 pb-5">
						
						<h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Serie clasica completa en Blueray "Thomas & Friends "</h5>
						
						
					<!--	<div class="flex items-center mt-2.5 mb-5">
							<div class="flex items-center space-x-1 rtl:space-x-reverse">
								<svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
									<path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
								</svg>
								<svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
									<path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
								</svg>
								<svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
									<path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
								</svg>
								<svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
									<path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
								</svg>
								<svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
									<path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
								</svg>
							</div>
							<span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>	
						</div>-->
						<div class="flex items-center justify-between mt-8">
							<span class="text-3xl font-bold text-gray-900 dark:text-white">$6490.00</span>
							<a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium 
							rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Quitar producto</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-span-1"></div>
		</div>
		<div class="row-span-1 grid grid-cols-5">
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
		</div>
		<div class="row-span-1 grid grid-cols-5">
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
		</div>
	</div>

	<div class="col-span-2 bg-teal-900">
		<div class="row-span-1 grid grid-cols-3">
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
		</div>
		<div class="row-span-1 grid grid-cols-3">
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
		</div>
		<div class="row-span-1 grid grid-cols-5">
			<div class="col-span-1"></div>
			<div class="col-span-3">

				<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-100 dark:border-gray-700">
					<h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-black text-start">
						Inventario del carrito
					</h5>
					<hr class="border-black mb-4">
					<div class="flex justify-between">
						<p class="mb-3 font-normal text-gray-700 dark:text-gray-900 text-start">Subtotal de productos </p>
						<p> $00000.00</p>
					</div>
					<div class="flex justify-between">
						<p class="mb-3 font-normal text-gray-700 dark:text-gray-900 text-start">Impuestos </p>
						<p> $00000.00</p>
					</div>
					
					<hr class="border-black mb-4">
					<div class="flex justify-between">

						<a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
							Ingresar codigo
							<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="-6 0 27 19">
								<path d="M17 0h-5.768a1 1 0 1 0 0 2h3.354L8.4 8.182A1.003 1.003 0 1 0 9.818 9.6L16 3.414v3.354a1 1 0 0 0 2 0V1a1 1 0 0 0-1-1Z"/>
								<path d="m14.258 7.985-3.025 3.025A3 3 0 1 1 6.99 6.768l3.026-3.026A3.01 3.01 0 0 1 8.411 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V9.589a3.011 3.011 0 0 1-1.742-1.604Z"/>
							</svg>
						</a>

						<a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
							Pasar a la compra
							<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="4 0 13 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
							</svg>
						</a>

					</div>

				</div>
			</div>
			<div class="col-span-1"></div>
		</div>
		<div class="row-span-1 grid grid-cols-3">
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
		</div>		
		<div class="row-span-1 grid grid-cols-3">
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
			<div class="col-span-1">a</div>
		</div>
		
	</div>
</div>
@endsection