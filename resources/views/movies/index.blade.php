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
<x-buttons/>
</div>
     
   </main>
</body>

<footer>
  {{-- Footer --}}
  <x-footer/>
</footer>

</html>