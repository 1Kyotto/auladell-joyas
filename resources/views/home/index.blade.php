@extends('template.master')

@section('contenido')
<div class="main col-span-6 bg-red-600">
	MAIN
	<div class="">
		{{--<img src="" alt="Imagen" width="400" height="200" class="mx-auto block">--}}
		{{--<img src="{{ asset('images/thomas-y-percy.jpg') }}" alt="Imagen" width="400" height="200" class="mx-auto block">--}}

		<div id="controls-carousel" class="relative w-full my-3" data-carousel="static">
			<!-- Carousel wrapper -->
			<div class="relative h-56 overflow-hidden rounded-lg md:h-96">
				<!-- Item 1 -->
				<div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10 flex justify-center" data-carousel-item="active">
					{{--<img src="{{ asset('images/thomas-y-percy.jpg') }}" class="absolute block w-full h-full object-cover top-0 left-0 block mx-auto" alt="Imagen 1">--}}

					<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
						<img class="rounded-lg" src="{{asset('images/thomas-y-percy.jpg')}}" alt="" />
						
					</div>

				</div>
				<!-- Item 2 -->
				<div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item>
					<img src="{{ asset('images/gato1.jpg') }}" class="{{--absolute block w-full h-full object-cover top-0 left-0--}} block mx-auto" alt="Imagen 2">
				</div>
				<!-- Item 3 -->
				<div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10 hidden" data-carousel-item>
					<img src="{{ asset('images/amazed-black-guy.jpg') }}" class="{{--absolute block w-full h-full object-cover top-0 left-0--}} block mx-auto" alt="Imagen 3">
				</div>
			</div>
			<!-- Slider controls -->
			<button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
				<span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
					<svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1L1 5l4 4" />
					</svg>
					<span class="sr-only">Previous</span>
				</span>
			</button>
			<button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
				<span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
					<svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9l4-4-4-4" />
					</svg>
					<span class="sr-only">Next</span>
				</span>
			</button>
		</div>

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

<div class="recomendaciones col-span-6 bg-lime-900 grid grid-rows-1">
	<div class="row-span-1 grid grid-cols-6">
		<div class="col-span-6">Recomendaciones</div>
		
		<div class="col-span-1 col-start-2">
			<div class="col-span-1 mx-2 my-2">
				<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
					<img class="rounded-t-lg p-1 rounded-xl" src="{{ asset('images/gato1.jpg') }}" alt="" />
					<div class="p-5">
						<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gato1</h5>
						<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Cuando pagan</p>
						<a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
							Comprame
							<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-span-1">
			<div class="col-span-1 mx-2 my-2">
				<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
					<img class="rounded-t-lg p-1 rounded-xl" src="{{ asset('images/gato1.jpg') }}" alt="" />
					<div class="p-5">
						<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gato2</h5>
						<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Cuando pagan</p>
						<a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
							Comprame
							<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-span-1">
			<div class="col-span-1 mx-2 my-2">
				<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
					<img class="rounded-t-lg p-1 rounded-xl" src="{{ asset('images/gato1.jpg') }}" alt="" />
					<div class="p-5">
						<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gato3</h5>
						<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Cuando pagan</p>
						<a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
							Comprame
							<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-span-1">
			<div class="col-span-1 mx-2 my-2">
				<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
					<img class="rounded-t-lg p-1 rounded-xl" src="{{ asset('images/gato1.jpg') }}" alt="" />
					<div class="p-5">
						<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gato4</h5>
						<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Cuando pagan</p>
						<a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
							Comprame
							<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	  </div>

</div>
@endsection