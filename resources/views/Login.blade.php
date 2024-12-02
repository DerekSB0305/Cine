@extends('layouts.app')
@section('content')

    <main class="w-full max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-semibold text-center text-gray-700 mb-6">Inicia Sesión</h1>

        <form method="post" action="{{ route('inicia-sesion') }}">
            @csrf

            <div class="mb-4">
                <label for="emailInput" class="block text-sm font-medium text-gray-700 mb-2">Correo Electrónico</label>
                <input 
                    type="email" 
                    id="emailInput" 
                    name="email" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required 
                    autocomplete="off"
                >
            </div>

            <div class="mb-4">
                <label for="passwordInput" class="block text-sm font-medium text-gray-700 mb-2">Contraseña</label>
                <input 
                    type="password" 
                    id="passwordInput" 
                    name="password" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required
                >
            </div>

            <div class="flex items-center mb-4">
                <input 
                    type="checkbox" 
                    id="rememberCheck" 
                    name="remember" 
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                >
                <label for="rememberCheck" class="ml-2 text-sm text-gray-600">Mantener sesión iniciada</label>
            </div>

            <div class="text-sm mb-6 text-center">
                ¿No tienes cuenta? 
                <a href="{{ route('registro') }}" class="text-blue-600 hover:underline">Regístrate</a>
            </div>

            <div>
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                >
                    Iniciar Sesión
                </button>
            </div>
        </form>
    </main>


@endsection
