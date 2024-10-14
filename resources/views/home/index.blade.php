@extends('template.master')

@section('contenido')
    {{--Main--}}
    <div class="col-span-6 bg-[#87A196] px-32 flex justify-between font-secundario text-primary h-[85vh] items-center">
        <div class="max-w-[50%] min-w-[50%] py-20 text-start">
            <h1 class="font-primario text-6xl mb-6">¡Diseña tu joya única! 
                <br>
                Brilla con estilo propio, porque cuidamos cada detalle.
            </h1>
            <p class="mb-6">Nuestra novedosa ORFEBRERÍA representa una amplia EXPERIENCIA, una fina ELABORACIÓN y un resultado de ALTA CALIDAD.</p>
            <p class="mb-6">Nos enorgullecemos de ser una alternativa con IDENTIDAD PROPIA que permanece en el tiempo, constituyendo RECUERDOS PARA EL FUTURO.</p>
            <a href="" class="border max-w-32 min-w-16 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                Personalizar
            </a>
        </div>
    </div>
    {{--Main--}}

    {{--Nuestros Productos--}}
    <div class="col-span-6 font-secundario text-primary mt-12 mb-12 px-32">
        <h2 class="text-4xl font-primario font-semibold pb-9">Nuestros productos</h2>
        <div class="flex justify-between pt-6">
            <div class="flex items-start flex-col">
                <img src="{{ asset('images\anillo.jpg') }}" alt="" class="object-cover h-60 w-60 mb-6">
                <a href="" class="border-2 max-w-64 min-w-32 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                    Aros
                </a>   
            </div>
            <div class="flex items-start flex-col">
                <img src="{{ asset('images\anillo.jpg') }}" alt="" class="object-cover h-60 w-60 mb-6">
                <a href="" class="border-2 max-w-64 min-w-32 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                    Anillos
                </a>   
            </div>
            <div class="flex items-start flex-col">
                <img src="{{ asset('images\anillo.jpg') }}" alt="" class="object-cover h-60 w-60 mb-6">
                <a href="" class="border-2 max-w-64 min-w-32 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                    Brazaletes
                </a>   
            </div>
            <div class="flex items-start flex-col">
                <img src="{{ asset('images\anillo.jpg') }}" alt="" class="object-cover h-60 w-60 mb-6">
                <a href="" class="border-2 max-w-64 min-w-32 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                    Collares
                </a>   
            </div>
        </div>
    </div>
    {{--Nuestros Productos--}}

    {{--Nuevos Productos--}}
    <div class="col-span-6 font-secundario text-primary mb-6 px-32 bg-[#87A196] text-start pt-12">
        <div class="flex gap-36 items-center mb-6">
            <h2 class="text-4xl font-primario font-semibold pb-9 col-span-1">Diseños <br> innovadores</h2>
            <p class="text-start col-span-5 text-color-aux">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed doloremque optio cupiditate sit asperiores atque, vitae beatae aut provident suscipit a consequuntur harum eligendi quos soluta neque labore alias maxime?</p>
        </div>
        <div class="flex justify-between items-center gap-10 mb-10">
            <img src="{{ asset('images\wallpaperjoyas.jpg') }}" alt="" class="rounded-xl h-60 w-full">
            <div class="flex flex-col gap-3">
                <h4>Lorem ipsum dolor.</h4>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor dignissimos impedit maxime sint, eum pariatur voluptatibus accusamus architecto corporis rerum ratione earum eius, aliquid commodi at quaerat exercitationem numquam.</p>
                <div class="pt-5">
                    <a href="" class="border max-w-64 min-w-32 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                        Comprar ahora
                    </a>  
                </div>
            </div>
        </div>
        <div class="flex flex-row-reverse justify-between items-center gap-10 mb-10">
            <img src="{{ asset('images\wallpaperjoyas.jpg') }}" alt="" class="rounded-xl h-60 w-full">
            <div class="flex flex-col gap-3">
                <h4>Lorem ipsum dolor.</h4>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor dignissimos impedit maxime sint, eum pariatur voluptatibus accusamus architecto corporis rerum ratione earum eius, aliquid commodi at quaerat exercitationem numquam.</p>
                <div class="pt-5">
                    <a href="" class="border max-w-64 min-w-32 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                        Comprar ahora
                    </a>  
                </div>
            </div>
        </div>
        <div class="flex justify-between items-center gap-10 mb-10">
            <img src="{{ asset('images\wallpaperjoyas.jpg') }}" alt="" class="rounded-xl h-60 w-full">
            <div class="flex flex-col gap-3">
                <h4>Lorem ipsum dolor.</h4>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor dignissimos impedit maxime sint, eum pariatur voluptatibus accusamus architecto corporis rerum ratione earum eius, aliquid commodi at quaerat exercitationem numquam.</p>
                <div class="pt-5">
                    <a href="" class="border max-w-64 min-w-32 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                        Comprar ahora
                    </a>  
                </div>
            </div>
        </div>
        <div class="flex flex-row-reverse justify-between items-center gap-10">
            <img src="{{ asset('images\wallpaperjoyas.jpg') }}" alt="" class="rounded-xl h-60 w-full">
            <div class="flex flex-col gap-3">
                <h4>Lorem ipsum dolor.</h4>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor dignissimos impedit maxime sint, eum pariatur voluptatibus accusamus architecto corporis rerum ratione earum eius, aliquid commodi at quaerat exercitationem numquam.</p>
                <div class="pt-5">
                    <a href="" class="border max-w-64 min-w-32 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                        Comprar ahora
                    </a>  
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center h-32">
            <a href="" class="border max-w-64 min-w-32 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux text-center">
                Ver todo
            </a>   
        </div>
    </div>
    {{--Nuevos Productos--}}

    {{--Trending--}}
    <div class="col-span-6 font-secundario text-primary mt-12 mb-12 px-32">
        <h2 class="text-4xl font-primario font-semibold pb-9">Joyas más solicitados</h2> {{--Mas vendidos--}}
        <div class="flex justify-between pt-6">
            <div class="flex items-start flex-col gap-1">
                <img src="{{ asset('images\anillo.jpg') }}" alt="" class="object-cover h-60 w-60 mb-4">
                <h4>Nombre Producto</h4>
                <span class="font-semibold">$99.999</span>
                <a href="" class="border-2 max-w-64 min-w-32 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                    Comprar ahora
                </a>   
            </div>
            <div class="flex items-start flex-col gap-1">
                <img src="{{ asset('images\anillo.jpg') }}" alt="" class="object-cover h-60 w-60 mb-4">
                <h4>Nombre Producto</h4>
                <span class="font-semibold">$99.999</span>
                <a href="" class="border-2 max-w-64 min-w-32 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                    Comprar ahora
                </a>   
            </div>
            <div class="flex items-start flex-col gap-1">
                <img src="{{ asset('images\anillo.jpg') }}" alt="" class="object-cover h-60 w-60 mb-4">
                <h4>Nombre Producto</h4>
                <span class="font-semibold">$99.999</span>
                <a href="" class="border-2 max-w-64 min-w-32 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                    Comprar ahora
                </a>   
            </div>
            <div class="flex items-start flex-col gap-1">
                <img src="{{ asset('images\anillo.jpg') }}" alt="" class="object-cover h-60 w-60 mb-4">
                <h4>Nombre Producto</h4>
                <span class="font-semibold">$99.999</span>
                <a href="" class="border-2 max-w-64 min-w-32 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                    Comprar ahora
                </a>   
            </div>
        </div>
    </div>
    {{--Trending--}}

    {{--Call to action 2--}}
    <div class="col-span-6 bg-[#87A196] px-32 flex justify-between font-secundario text-primary h-[85vh] items-center">
        <div class="max-w-[50%] min-w-[50%] py-20 text-start">
            <h1 class="font-primario text-6xl mb-6">¡Diseña tu joya única hoy! 
                <br>
                Personaliza cada detalle y brilla con estilo propio.
            </h1>
            <p class="mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum omnis expedita animi nihil tempora ratione aliquid officia? Nemo libero ipsa, nisi saepe esse eaque id qui, beatae natus consectetur fugit.</p>
            <a href="" class="border max-w-32 min-w-16 rounded-full py-3 px-6 hover:bg-color-secondary hover:text-aux">
                Personalizar
            </a>
        </div>
    </div>
    {{--Call to action 2--}}

    {{--Idea de regalos--}}
    <div class="col-span-6 font-secundario text-black px-32 flex flex-col my-12">
        <h2 class="text-4xl font-primario font-semibold pb-9 col-span-4">Idea de Regalos</h2>
        <div class="grid grid-cols-4 grid-rows-2 gap-1 mb-6">
            <a href="" class="hover:blur-[1px]">
                <img src="{{ asset('images\anillo.jpg') }}" alt="" class="object-cover h-60 w-full">
            </a>
            <a href="" class="col-span-2 hover:blur-[1px]">
                <img src="{{ asset('images\anillo.jpg') }}" alt="" class="object-cover h-60 w-full">
            </a>
            <a href="" class="col-start-4 hover:blur-[1px]">
                <img src="{{ asset('images\anillo.jpg') }}" alt="" class="object-cover h-60 w-full">
            </a>
            <a href="" class="col-span-2 row-start-2 hover:blur-[1px]">
                <img src="{{ asset('images\anillo.jpg') }}" alt="" class="object-cover h-60 w-full col-span-2 row-start-2">
            </a>
            <a href="" class="col-span-2 col-start-3 row-start-2 hover:blur-[1px]">
                <img src="{{ asset('images\anillo.jpg') }}" alt="" class="object-cover h-60 w-full col-span-2 col-start-3 row-start-2">
            </a>
        </div>
    </div>
    {{--Idea de regalos--}}
@endsection