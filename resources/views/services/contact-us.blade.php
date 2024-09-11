@extends('template.master')

@section('contenido')
<div class="col-span-6 grid grid-rows-3 bg-teal-600">
    <div class="grid grid-cols-1">
        <div class="col-span-1"></div>
        <div class="col-span-1"></div>
        <div class="col-span-1">
            <h2 class="text-3xl">
                <br>Lorem ipsum sample text
            </h2>
        </div>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-3 text-center">
        <p class="col-span-3">parrafo 1 de datos</p>
        <p class="col-span-3">parrafo 2 de datos</p>
        <p class="col-span-3">parrafo 3 de datos</p>
        <p class="col-span-3">parrafo para links</p>
    </div>
    
    <div class="grid grid-cols-3">
        <div class="col-span-1"></div>
        <div class="col-span-1">
            <form class="max-w-sm mx-auto">
                <div class="mb-2">
                    <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tu nombre">
                </div>
                <div class="mb-2">
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tu email" required />
                </div>
                <div class="mb-2">
                    <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Telefono (opcional)" />
                </div>
                <div class="mb-2 flex items-start">
                    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 
                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Dejanos un mensaje"></textarea>
                </div>
                <div class="mb-2">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg 
                    text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
                </div>
                
            </form>
        </div>
        <div class="col-span-1"></div>
    </div>

</div>
@endsection