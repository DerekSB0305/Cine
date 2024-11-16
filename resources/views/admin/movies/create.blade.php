<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Pelicula</title>
</head>

<body>
    <h1>Crear Nueva pelicula </h1>
    <form action="/admin/peliculas/crear" method="post">
        @csrf
        <input type="text" name="title" id="title" placeholder="Escibe el titulo" required>
        <label>Generos</label>
        <select name="genre_id">
            <option value="1">Acción</option>
            <option value="2">Aventura</option>
            <option value="3">Ciencia Ficción</option>
            <option value="4">Comedia</option>
            <option value="5">Drama</option>
            <option value="6">Fantasía</option>
            <option value="7">Suspenso</option>
            <option value="8">Terror</option>
        </select>

        <input type="text" name="duration" id="duration" placeholder="Escribe la duración" required>

        <label>Clasificaciones</label>
        <select name="classification_id">
            <option value="1">AA</option>
            <option value="2">A</option>
            <option value="3">B</option>
            <option value="4">C</option>
            <option value="5">D</option>
        </select>

        <input type="text" name="synopsis" id="synopsis" placeholder="Escribe la sinopsis" required>
        
        <button type="submit">Guardar</button>
    </form>
</body>

</html>