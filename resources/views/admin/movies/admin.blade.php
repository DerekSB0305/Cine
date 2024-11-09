@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/Style_admin.css')}}">

<h1>Subir Nueva Película</h1>
    <form>
        <label for="titulo">Título:</label>
        <input class="input" type="text" id="titulo" name="titulo"><br><br>

        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero"><br><br>

        <label for="duracion">Duración (minutos):</label>
        <input type="number" id="duracion" name="duracion"><br><br>

        <label for="horario">Horario:</label>
        <input type="text" id="horario" name="horario"><br><br>

        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" name="imagen" onchange="previewImage()">
        <img id="preview" src="#" alt="Vista previa de la imagen">

        <input type="submit" value="Subir Película">
    </form>
    <script>
        function previewImage() {
            const imageInput = document.getElementById('imagen');
            const previewImage = document.getElementById('preview');

            if (imageInput.files && imageInput.files[0]) {
                const reader = new FileReader();

                reader.onload = (e) => {
                    previewImage.src = e.target.result;
                };

                reader.readAsDataURL(imageInput.files[0]);
            }
        }
    </script>
@endsection