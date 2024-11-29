<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Inicio</title>
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    <header class="shadow bg-white sticky top-0 z-10">
        <x-navbarCine />
    </header>

    <!-- Main Content -->
    <main>
        <!-- Carrusel -->
        <section class="bg-gray-800">
  <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div id="carousel" class="relative overflow-hidden">
      <!-- Contenedor de diapositivas -->
      <div class="flex transition-transform duration-700 ease-in-out" id="carousel-slides">
        @foreach ($movies as $movie)
          <div class="flex-none w-full h-64 sm:h-72 md:h-96 relative">
            <img src="{{ asset('storage/' . str_replace('public/', '', $movie->image_url)) }}" 
                 alt="{{ $movie->title }}" 
                 class="w-full h-full object-cover">
          </div>
        @endforeach
      </div>

      <!-- Botones de navegación -->
      <button id="prevButton" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-600/50 text-white rounded-full p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke="currentColor" fill="none">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>
      <button id="nextButton" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-600/50 text-white rounded-full p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke="currentColor" fill="none">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
  </div>
</section>

        <!-- Películas -->
        <section class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($movies as $movie)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('storage/' . str_replace('public/', '', $movie->image_url)) }}" alt="{{ $movie->title }}"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800">{{ $movie->title }}</h2>
                        <p class="text-sm text-gray-600"><strong>Género:</strong> {{ $movie->genre->name ?? 'Sin género' }}</p>
                        <p class="text-sm text-gray-600"><strong>Clasificación:</strong> {{ $movie->classification->name ?? 'Sin clasificación' }}</p>
                        <p class="text-sm text-gray-600"><strong>Duración:</strong> {{ $movie->duration }}</p>
                        <p class="text-sm text-gray-700 mt-2">{{ $movie->synopsis }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-12">
        <x-footer />
    </footer>
</body>

<script src="{{asset('js/Carrusel.js')}}">
</script>

</html>
