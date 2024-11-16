<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>

<body>
    <h1>Peliculas Administrador</h1>
    <a href="/admin/peliculas/crear">Crear Pelicula</a>
    <table>
        <tr>
            <th>Titulo</th>
            <th>genero</th>
            <th>duración</th>
            <th>Clasificación</th>
            <th>Sinopsis</th>
            <th>imagen</th>
            <th>Acciones</th>
        </tr>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{$movie->title}}</td>
                <td>{{$movie->genre_id}}</td>
                <td>{{$movie->duration}}</td>
                <td>{{$movie->classification_id}}</td>
                <td>{{$movie->synopsis}}</td>
                <td>{{$movie->movie_img}}</td>
                <td>
                    <a href="/admin/peliculas/{{ 
                    $movie->id}}/editar"> Editar</a>
                    <form action="/admin/peliculas/{{
                    $movie->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                    <!-- <a href="/admin/peliculas/{{ 
                    $movie->id}}/delete">Eliminar</a> -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>