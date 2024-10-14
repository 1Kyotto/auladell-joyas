<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Auladell Joyas</title>
        @vite('resources/css/app.css')

    </head>
    <body class="grid grid-cols-6 text-center bg-color-bg">
        {{--NAVBAR--}}
        <nav class="bg-white col-span-6 text-black grid grid-cols-6 py-3 shadow-sm transition-transform duration-300 sticky top-0 z-20">
            {{--LOGO--}}
            <div class="ml-32 col-span-2">
                <a href="{{ route('home.index') }}" class="flex justify-start items-center gap-4">
                    <h2 class="text-secondary flex justify-start items-center transition-colors duration-150 font-primario font-medium text-3xl">
                        Auladell
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-1" viewBox="0 0 24 24" width="19" height="19" color="#000000" fill="none">
                            <path d="M3 12C7.97056 12 12 7.97056 12 3C12 7.97056 16.0294 12 21 12C16.0294 12 12 16.0294 12 21C12 16.0294 7.97056 12 3 12Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                        </svg>
                        Joyas
                    </h2>
                    <img class="h-16" src="{{ asset('images/logo.png') }}" alt="logo-auladelljoyas"></img>
                </a>
            </div>
            {{--LOGO--}}

            {{--MENU--}}
            <div class="flex items-center justify-around py-4 font-secundario text-primary text-md col-span-2">
                {{--<a href="{{ route('joyas.index', ['type' => 'personaliza']) }}" class="hover:text-secondary transition-colors duration-150">Personaliza</a>
                <a href="{{ route('joyas.index', ['type' => 'aros']) }}" class="hover:text-secondary transition-colors duration-150">Aros</a>
                <a href="{{ route('joyas.index', ['type' => 'anillos']) }}" class="hover:text-secondary transition-colors duration-150">Anillos</a>
                <a href="{{ route('joyas.index', ['type' => 'brazaletes']) }}" class="hover:text-secondary transition-colors duration-150">Brazaletes</a>
                <a href="{{ route('joyas.index', ['type' => 'collares']) }}" class="hover:text-secondary transition-colors duration-150">Collares</a>--}}
                <a href="" class="hover:text-secondary transition-colors duration-150">Personaliza</a>
                <a href="" class="hover:text-secondary transition-colors duration-150">Aros</a>
                <a href="" class="hover:text-secondary transition-colors duration-150">Anillos</a>
                <a href="" class="hover:text-secondary transition-colors duration-150">Brazaletes</a>
                <a href="" class="hover:text-secondary transition-colors duration-150">Collares</a>
            </div>
            {{--MENU--}}

            {{--SEARCH Y BOTONES--}}
            <div class="flex items-center gap-3 col-span-2 mr-32 justify-end">
                <div class="bg-gray-200 border rounded-xl px-2 py-1 flex gap-2 items-center w-[65%]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none">
                        <path d="M17.5 17.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                    </svg>
                    <input type="text" placeholder="Buscar..." class="bg-gray-200 outline-none w-[65%]">
                </div>

                {{--Carrito--}}
                <a href="{{ route('cart.index') }}" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary hover:text-secondary transition-colors duration-150" viewBox="0 0 24 24" fill="none">
                        <path d="M3.87289 17.0194L2.66933 9.83981C2.48735 8.75428 2.39637 8.21152 2.68773 7.85576C2.9791 7.5 3.51461 7.5 4.58564 7.5H19.4144C20.4854 7.5 21.0209 7.5 21.3123 7.85576C21.6036 8.21152 21.5126 8.75428 21.3307 9.83981L20.1271 17.0194C19.7282 19.3991 19.5287 20.5889 18.7143 21.2945C17.9 22 16.726 22 14.3782 22H9.62182C7.27396 22 6.10003 22 5.28565 21.2945C4.47127 20.5889 4.27181 19.3991 3.87289 17.0194Z" stroke="currentColor" stroke-width="1.5" />
                        <path d="M17.5 7.5C17.5 4.46243 15.0376 2 12 2C8.96243 2 6.5 4.46243 6.5 7.5" stroke="currentColor" stroke-width="1.5" />
                    </svg>
                </a>
                {{--Carrito--}}

                {{--Login--}}
                @guest
                <a href="{{ route('login') }}" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary hover:text-secondary transition-colors duration-150" viewBox="0 0 24 24" fill="none">
                        <path d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="1.5" />
                        <path d="M14.75 9.5C14.75 11.0188 13.5188 12.25 12 12.25C10.4812 12.25 9.25 11.0188 9.25 9.5C9.25 7.98122 10.4812 6.75 12 6.75C13.5188 6.75 14.75 7.98122 14.75 9.5Z" stroke="currentColor" stroke-width="1.5" />
                        <path d="M5.49994 19.0001L6.06034 18.0194C6.95055 16.4616 8.60727 15.5001 10.4016 15.5001H13.5983C15.3926 15.5001 17.0493 16.4616 17.9395 18.0194L18.4999 19.0001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                @endguest
                {{--Login--}}

                {{--Logout--}}
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="flex items-center">
                        @csrf
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary hover:text-secondary transition-colors duration-150" viewBox="0 0 24 24" fill="none">
                                <path d="M15 17.625C14.9264 19.4769 13.3831 21.0494 11.3156 20.9988C10.8346 20.987 10.2401 20.8194 9.05112 20.484C6.18961 19.6768 3.70555 18.3203 3.10956 15.2815C3 14.723 3 14.0944 3 12.8373L3 11.1627C3 9.90561 3 9.27705 3.10956 8.71846C3.70555 5.67965 6.18961 4.32316 9.05112 3.51603C10.2401 3.18064 10.8346 3.01295 11.3156 3.00119C13.3831 2.95061 14.9264 4.52307 15 6.37501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M21 12H10M21 12C21 11.2998 19.0057 9.99153 18.5 9.5M21 12C21 12.7002 19.0057 14.0085 18.5 14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </form>
                    
                    @if(auth()->user()->role === 'C')
                    <a href="" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary hover:text-secondary transition-colors duration-150" viewBox="0 0 24 24" fill="none">
                            <path d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </a>
                    @endif

                    @if(auth()->user()->role === 'A')
                        <a href="{{ route('admin.product') }}" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary hover:text-secondary transition-colors duration-150" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard"><rect width="7" height="9" x="3" y="3" rx="1"/><rect width="7" height="5" x="14" y="3" rx="1"/><rect width="7" height="9" x="14" y="12" rx="1"/><rect width="7" height="5" x="3" y="16" rx="1"/></svg>
                        </a>
                    @endif
                @endauth

                {{--Logout--}}
            </div>
            {{--SEARCH Y BOTONES--}}
        </nav>
        {{--NAVBAR--}}
        
        {{--CONTENIDO--}}
        @yield('contenido')
        {{--CONTENIDO--}}

        {{--FOOTER--}}
        <footer class="col-span-6 bg-[#87A196] text-primary grid grid-cols-6">
            <div class="col-span-6 flex justify-center items-center py-6">
                <div class="flex justify-start items-center gap-8">
                    <img class="h-12" src="{{ asset('images/logo.png') }}" alt="logo-auladelljoyas"></img>
                    <h2 class="font-primario font-medium text-3xl">Auladell Joyas</h2>
                </div>
            </div>

            <div class="border-b border-gray-300 col-span-6"></div>

            <div class="col-span-6 flex mx-32 justify-between py-6 font-secundario">
                <div class="flex flex-col text-start">
                    <h4 class="pb-1 font-bold">Categorías</h4>
                    <a href="" class="hover:text-secondary transition-colors duration-150">Aros</a>
                    <a href="" class="hover:text-secondary transition-colors duration-150">Anillos</a>
                    <a href="" class="hover:text-secondary transition-colors duration-150">Brazaletes</a>
                    <a href="" class="hover:text-secondary transition-colors duration-150">Collares</a>
                    <a href="" class="hover:text-secondary transition-colors duration-150">Joya Personalizada</a>
                    <a href="" class="hover:text-secondary transition-colors duration-150">Todas las colecciones</a>
                </div>
                <div class="flex flex-col text-start">
                    <h4 class="pb-1 font-bold">Información</h4>
                    <a href="" class="hover:text-secondary transition-colors duration-150">Acerca de Auladell</a>
                    <a href="" class="hover:text-secondary transition-colors duration-150">Política de privacidad</a>
                    <a href="" class="hover:text-secondary transition-colors duration-150">Mantención de joyas</a>
                </div>
                <div class="flex flex-col text-start">
                    <h4 class="pb-1 font-bold">Servicio al cliente</h4>
                    <a href="" class="hover:text-secondary transition-colors duration-150">Preguntas frecuentes</a>
                    <a href="" class="hover:text-secondary transition-colors duration-150">Seguimiento de pedido</a>
                    <a href="" class="hover:text-secondary transition-colors duration-150">Cambios, devoluciones y garantía</a>
                </div>
                <div class="flex flex-col text-start">
                    <h4 class="pb-1 font-bold">Contacto</h4>
                    <div class="flex gap-6 pb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-secondary transition-colors duration-150" viewBox="0 0 24 24" fill="none">
                            <path d="M2 6L8.91302 9.91697C11.4616 11.361 12.5384 11.361 15.087 9.91697L22 6" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path d="M2.01577 13.4756C2.08114 16.5412 2.11383 18.0739 3.24496 19.2094C4.37608 20.3448 5.95033 20.3843 9.09883 20.4634C11.0393 20.5122 12.9607 20.5122 14.9012 20.4634C18.0497 20.3843 19.6239 20.3448 20.7551 19.2094C21.8862 18.0739 21.9189 16.5412 21.9842 13.4756C22.0053 12.4899 22.0053 11.5101 21.9842 10.5244C21.9189 7.45886 21.8862 5.92609 20.7551 4.79066C19.6239 3.65523 18.0497 3.61568 14.9012 3.53657C12.9607 3.48781 11.0393 3.48781 9.09882 3.53656C5.95033 3.61566 4.37608 3.65521 3.24495 4.79065C2.11382 5.92608 2.08114 7.45885 2.01576 10.5244C1.99474 11.5101 1.99475 12.4899 2.01577 13.4756Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                        </svg>
                        <p>contacto@auladelljoyas.cl</p>
                    </div>
                    <div class="flex gap-6">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-secondary transition-colors duration-150" viewBox="0 0 24 24" fill="none">
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.3789 2.27907 14.6926 2.78382 15.8877C3.06278 16.5481 3.20226 16.8784 3.21953 17.128C3.2368 17.3776 3.16334 17.6521 3.01642 18.2012L2 22L5.79877 20.9836C6.34788 20.8367 6.62244 20.7632 6.87202 20.7805C7.12161 20.7977 7.45185 20.9372 8.11235 21.2162C9.30745 21.7209 10.6211 22 12 22Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M8.58815 12.3773L9.45909 11.2956C9.82616 10.8397 10.2799 10.4153 10.3155 9.80826C10.3244 9.65494 10.2166 8.96657 10.0008 7.58986C9.91601 7.04881 9.41086 7 8.97332 7C8.40314 7 8.11805 7 7.83495 7.12931C7.47714 7.29275 7.10979 7.75231 7.02917 8.13733C6.96539 8.44196 7.01279 8.65187 7.10759 9.07169C7.51023 10.8548 8.45481 12.6158 9.91948 14.0805C11.3842 15.5452 13.1452 16.4898 14.9283 16.8924C15.3481 16.9872 15.558 17.0346 15.8627 16.9708C16.2477 16.8902 16.7072 16.5229 16.8707 16.165C17 15.8819 17 15.5969 17 15.0267C17 14.5891 16.9512 14.084 16.4101 13.9992C15.0334 13.7834 14.3451 13.6756 14.1917 13.6845C13.5847 13.7201 13.1603 14.1738 12.7044 14.5409L11.6227 15.4118" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                        </a>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-secondary transition-colors duration-150" viewBox="0 0 24 24" fill="none">
                                <path d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M16.5 12C16.5 14.4853 14.4853 16.5 12 16.5C9.51472 16.5 7.5 14.4853 7.5 12C7.5 9.51472 9.51472 7.5 12 7.5C14.4853 7.5 16.5 9.51472 16.5 12Z" stroke="currentColor" stroke-width="1.5" />
                                <path d="M17.5078 6.5L17.4988 6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-secondary transition-colors duration-150" viewBox="0 0 24 24" fill="none">
                                <path d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M16.9265 8.02637H13.9816C12.9378 8.02637 12.0894 8.86847 12.0817 9.91229L11.9964 21.4268M10.082 14.0017H14.8847" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        {{--FOOTER--}}
        <script>
            let lastScrollTop = 0;
            const navbar = document.getElementById('navbar'); // Seleccionamos la navbar
        
            window.addEventListener('scroll', function () {
                const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        
                // Verificamos si el usuario está bajando o subiendo
                if (currentScroll > lastScrollTop) {
                    // El usuario está bajando, ocultamos la navbar
                    navbar.style.transform = 'translateY(-100%)';
                } else {
                    // El usuario está subiendo, mostramos la navbar
                    navbar.style.transform = 'translateY(0)';
                }
        
                // Actualizamos la última posición de scroll
                lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Evita valores negativos en la parte superior
            });
        </script>
    </body>
</html>