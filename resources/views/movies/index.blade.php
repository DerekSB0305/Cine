<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Inicio</title>
</head>

<header>
  {{-- Navbar --}}
  <x-navbarCine/>
</header>

<body>
   <main>

    {{-- Carrusel --}}
 <div>
  <x-carrousel/>
 </div>
   
 {{-- Boton Cartelera y proximamente --}}
<div class="text-center">
<!-- <x-buttons/> -->
        @foreach($movies as $movie)
            <div style="border: 1px solid #ccc; padding: 10px; width: 200px;">
                <h2>{{ $movie->title }}</h2>
                <img src="{{ asset('storage/' . str_replace('public/', '', $movie->image_url)) }}" alt="{{ $movie->title }}" style="width: 100%;">
                <p><strong>Género:</strong> {{ $movie->genre->name ?? 'Sin género' }}</p>
                <p><strong>Clasificación:</strong> {{ $movie->classification->name ?? 'Sin clasificación' }}</p>
                <p><strong>Duración:</strong> {{ $movie->duration }}</p>
                <p>{{ $movie->synopsis }}</p>
            </div>
        @endforeach
</div>
     
   </main>
</body>

<footer>
  {{-- Footer --}}
  <x-footer/>
</footer>

</html>