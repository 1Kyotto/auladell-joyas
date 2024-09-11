@extends('template.master')

@section('contenido')
<div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0">
    <div>
        <!-- Logo -->
        <a href="/">
            {{-- <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-20 h-20"> --}}
            <img src="" alt="Logo" class="w-20 h-20">
        </a>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <!-- Errores de validación -->
        @if ($errors->any())
            <div class="mb-4 text-sm text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario de Inicio de Sesión -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Correo Electrónico -->
            <div>
                <label for="email" class="block font-medium text-sm text-gray-700">Correo Electrónico</label>
                <input id="email" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <!-- Contraseña -->
            <div class="mt-4">
                <label for="password" class="block font-medium text-sm text-gray-700">Contraseña</label>
                <input id="password" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="password" name="password" required autocomplete="current-password">
            </div>

            <!-- Recordarme -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Recordarme</span>
                </label>
            </div>

            <!-- Enlaces y Botón -->
            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('password.request') }}">
                    Olvidaste tu contraseña?
                </a>

                <button type="submit" class="ml-3 inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-25 transition">
                    Iniciar Sesión
                </button>
            </div>
        </form>
    </div>
</div>
@endsection