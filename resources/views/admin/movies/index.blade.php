<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layouts.app')
    @section('content')
    <title>Peliculas</title>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="container mx-auto p-8">

        <div class="text-center mb-8">

            <h1 class="text-3xl font-bold text-gray-800 mb-4">Películas Administrador</h1>

            <a href="/admin/peliculas/crear" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-500">Crear Pelicula</a>

        </div>

        <div class="overflow-x-auto">

            <table class="w-full max-w-7xl mx-auto bg-white shadow-md rounded-lg overflow-hidden border border-gray-300">
                <thead class="bg-gray-200 text-gray-700 uppercase text-sm">

                    <tr>
                        <th class="border border-slate-800">Titulo</th>
                        <th class="border border-slate-800">genero</th>
                        <th class="border border-slate-800">duración</th>
                        <th class="border border-slate-800">Clasificación</th>
                        <th class="border border-slate-800">Sinopsis</th>
                        <th class="border border-slate-800">imagen</th>
                        <th class="border border-slate-800">Acciones</th>
                    </tr>

                </thead>

                <tbody class="text-gray-600">
                    @foreach ($movies as $movie)
                    <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-gray-100' }} hover:bg-gray-200 transition-colors">
                        <td class="px-4 py-3 border">{{$movie->title}}</td>
                        <td class="px-4 py-3 border">{{$movie->genre->name ?? 'Sin género' }}</td>
                        <td class="px-4 py-3 border">{{$movie->duration}}</td>
                        <td class="px-4 py-3 border">{{$movie->classification->name ?? 'Sin género'}}</td>
                        <td class="px-4 py-3 border">{{$movie->synopsis}}</td>
                        <td class="px-4 py-3 border">
                            @if ($movie->image_url)
                            <img src="{{ asset('storage/' . str_replace('public/', '', $movie->image_url)) }}" alt="{{ $movie->title }}" class="w-32 h-32 object-cover rounded-md mx-auto">
                            @else
                            <span class="text-sm text-gray-500">Sin imagen</span>
                            @endif
                        </td>

                        <td class="px-4 py-3 border">
                            <form action="/admin/peliculas/{{ $movie->id}}/editar">
                                @csrf
                                <div class="m-2.5 flex items-center justify-center gap-x-6">
                                    <button type="submit" class="w-full bg-indigo-600 text-white px-4 py-2 rounded-md shadow hover:bg-indigo-500">editar</button>
                                </div>
                            </form>
                            <form action="/admin/peliculas/{{$movie->id}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" class="w-full bg-red-600 text-white px-4 py-2 rounded-md shadow hover:bg-red-500">Eliminar</button>

                            </form>
        </div>

    </div>

    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
</body>

</html>
@endsection