@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="{{ asset('css/style_horario.css') }}">

  <!-- Encabezado de la página -->
  <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-center py-10">
    <div class="mx-auto mb-6">
      <div class="inline-block">
        <!-- Mostrar la imagen de la película -->
        <img src="{{ asset('storage/' . Str::replaceFirst('public/', '', $movie->image_url)) }}" alt="Imagen de la película"
             class="w-48 h-48 object-cover rounded-lg shadow-2xl border-4 border-white">
      </div>
    </div>
    <h1 class="text-4xl font-extrabold leading-tight tracking-tight">¡Elige tu horario de película!</h1>
  </div>

  <!-- Contenedor principal -->
  <div class="container mx-auto px-6 py-12">
    <!-- Sección de la ubicación del cine -->
    <div class="text-center mb-8">
      <button class="bg-blue-600 text-white px-6 py-3 rounded-xl shadow-xl transform hover:scale-105 transition duration-300 ease-in-out hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
        CineStar
      </button>
    </div>

    <!-- Selector de fechas -->
    <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-6 mb-10">
      <button class="bg-gradient-to-r from-gray-700 via-gray-800 to-gray-900 text-white py-3 px-5 rounded-xl shadow-md hover:bg-gradient-to-r hover:from-blue-600 hover:to-indigo-600 transition duration-300" onclick="showTimes('jueves')">
        Jueves<br><span class="text-xs text-gray-300"></span>
      </button>
      <button class="bg-gradient-to-r from-gray-700 via-gray-800 to-gray-900 text-white py-3 px-5 rounded-xl shadow-md hover:bg-gradient-to-r hover:from-blue-600 hover:to-indigo-600 transition duration-300" onclick="showTimes('viernes')">
        Viernes<br><span class="text-xs text-gray-300"></span>
      </button>
      <button class="bg-gradient-to-r from-gray-700 via-gray-800 to-gray-900 text-white py-3 px-5 rounded-xl shadow-md hover:bg-gradient-to-r hover:from-blue-600 hover:to-indigo-600 transition duration-300" onclick="showTimes('sabado')">
        Sábado<br><span class="text-xs text-gray-300"></span>
      </button>
      <button class="bg-gradient-to-r from-gray-700 via-gray-800 to-gray-900 text-white py-3 px-5 rounded-xl shadow-md hover:bg-gradient-to-r hover:from-blue-600 hover:to-indigo-600 transition duration-300" onclick="showTimes('domingo')">
        Domingo<br><span class="text-xs text-gray-300"></span>
      </button>
      <button class="bg-gradient-to-r from-gray-700 via-gray-800 to-gray-900 text-white py-3 px-5 rounded-xl shadow-md hover:bg-gradient-to-r hover:from-blue-600 hover:to-indigo-600 transition duration-300" onclick="showTimes('lunes')">
        Lunes<br><span class="text-xs text-gray-300"></span>
      </button>
      <button class="bg-gradient-to-r from-gray-700 via-gray-800 to-gray-900 text-white py-3 px-5 rounded-xl shadow-md hover:bg-gradient-to-r hover:from-blue-600 hover:to-indigo-600 transition duration-300" onclick="showTimes('martes')">
        Martes<br><span class="text-xs text-gray-300"></span>
      </button>
      <button class="bg-gradient-to-r from-gray-700 via-gray-800 to-gray-900 text-white py-3 px-5 rounded-xl shadow-md hover:bg-gradient-to-r hover:from-blue-600 hover:to-indigo-600 transition duration-300" onclick="showTimes('miercoles')">
        Miércoles<br><span class="text-xs text-gray-300"></span>
      </button>
    </div>

    <!-- Sección de horarios -->
    <div class="showtime-section">
      <h2 class="text-3xl font-semibold text-gray-800 mb-4">{{ $movie->title }}</h2> <!-- Título de la película -->
      <p class="text-lg text-gray-600 mb-6">Doblada al español</p>
      <div id="showtimes" class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-6">
        <!-- Los horarios se mostrarán aquí -->
      </div>
    </div>
  </div>
  <script src="{{ asset('js/schedule.js') }}"></script>
@endsection
