<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layouts.app')
    @section('content')
    <title>Editar Peliculas</title>
</head>

<div class="bg-gradient-to-r from-gray-100 to-gray-200 min-h-screen flex items-center justify-center">
    <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg overflow-hidden">
        
        <div class="bg-blue-600 text-white py-4 px-6">
            <h1 class="text-2xl font-semibold text-center">Editar Película</h1>
        </div>

        <form action="{{ route('movies.update', $movies) }}" method="post" autocomplete="off" enctype="multipart/form-data" class="p-6 space-y-6">
            @method('PUT')
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
                    <input type="text" name="title" id="title" value="{{ $movies->title }}" placeholder="Escribe el título" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="genre_id" class="block text-sm font-medium text-gray-700">Género</label>
                    <select name="genre_id" id="genre_id"
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="1" {{ $movies->genre_id == 1 ? 'selected' : '' }}>Acción</option>
                        <option value="2" {{ $movies->genre_id == 2 ? 'selected' : '' }}>Aventura</option>
                        <option value="3" {{ $movies->genre_id == 3 ? 'selected' : '' }}>Ciencia Ficción</option>
                        <option value="4" {{ $movies->genre_id == 4 ? 'selected' : '' }}>Comedia</option>
                        <option value="5" {{ $movies->genre_id == 5 ? 'selected' : '' }}>Drama</option>
                        <option value="6" {{ $movies->genre_id == 6 ? 'selected' : '' }}>Fantasía</option>
                        <option value="7" {{ $movies->genre_id == 7 ? 'selected' : '' }}>Suspenso</option>
                        <option value="8" {{ $movies->genre_id == 8 ? 'selected' : '' }}>Terror</option>
                    </select>
                </div>

                <div>
                    <label for="duration" class="block text-sm font-medium text-gray-700">Duración</label>
                    <input type="text" name="duration" id="duration" value="{{ $movies->duration }}" placeholder="Escribe la duración" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="classification_id" class="block text-sm font-medium text-gray-700">Clasificación</label>
                    <select name="classification_id" id="classification_id"
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="1" {{ $movies->classification_id == 1 ? 'selected' : '' }}>AA</option>
                        <option value="2" {{ $movies->classification_id == 2 ? 'selected' : '' }}>A</option>
                        <option value="3" {{ $movies->classification_id == 3 ? 'selected' : '' }}>B</option>
                        <option value="4" {{ $movies->classification_id == 4 ? 'selected' : '' }}>C</option>
                        <option value="5" {{ $movies->classification_id == 5 ? 'selected' : '' }}>D</option>
                    </select>
                </div>
            </div>

            <div>
                <label for="synopsis" class="block text-sm font-medium text-gray-700">Sinopsis</label>
                <textarea name="synopsis" id="synopsis" rows="3" placeholder="Escribe la sinopsis" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ $movies->synopsis }}</textarea>
            </div>

            <!-- Subir Imagen -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Subir Imagen</label>
                <input type="file" name="image" id="image" onchange="previewImage(event)"
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Previsualización de la Imagen -->
            <div class="mt-6 text-center" id="imagePreviewContainer" style="display: none;">
                <label class="block text-sm font-medium text-gray-700 mb-2">Vista Previa de la Imagen</label>
                <div class="inline-block">
                    <img id="imagePreview" src="#" alt="Imagen de la película" class="w-48 h-48 object-cover rounded-md shadow-md">
                </div>
            </div>

            <div class="mt-6 text-center">
                <label class="block text-sm font-medium text-gray-700 mb-2">Imagen Actual</label>
                <div class="inline-block">
                    <img src="{{ asset('storage/' . Str::replaceFirst('public/', '', $movies->image_url)) }}" alt="Imagen de la película"
                        class="w-48 h-48 object-cover rounded-md shadow-md">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium shadow-md hover:bg-blue-500 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</div>

<script src="{{asset('js/admin.js')}}">
</script>

@endsection