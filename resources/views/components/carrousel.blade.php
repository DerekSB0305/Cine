<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrusel de Imágenes Automático</title>
    <style>
        .carrusel {
          width: 100%;
            max-width: 400px;
            position: relative;
            margin: auto;
            padding: 1rem;
        }
        .carrusel img {
            width: 100%;
            display: none;
        }
        .carrusel img.activa {
            display: block;
        }
    </style>
</head>
<body>
   
    <div class="carrusel">
        <img src="{!! asset('img/3.jpeg') !!}" alt="Imagen 1" class="activa w-96 h-130">
        <img src="{!! asset('img/4.jpeg') !!}" alt="Imagen 2" class="w-96 h-130">
        <img src="{!! asset('img/5.jpeg') !!}" alt="Imagen 3" class="w-96 h-130">
    </div>

    <script>
        let imagenes = document.querySelectorAll('.carrusel img');
        let indiceActual = 0;

        function cambiarImagen() {
            imagenes[indiceActual].classList.remove('activa');
            indiceActual = (indiceActual + 1) % imagenes.length;
            imagenes[indiceActual].classList.add('activa');
        }

        setInterval(cambiarImagen, 3000); // Cambia la imagen cada 6 segundos
    </script>
</body>
</html>