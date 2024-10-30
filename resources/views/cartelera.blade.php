@extends('layouts.app')
    @section('content')
    <link rel="stylesheet" href="{{asset('css/Style_cartelera.css')}}">
    <main>
    <div class="container">
        <section class="movie">
        <img src="{!! asset('img/deapool.jpg') !!}">
            <h2>Película 1</h2>
            <p>Un grupo de amigos se embarca en una aventura épica a través de un mundo mágico donde deben enfrentar sus miedos y descubrir el verdadero significado de la amistad.</p>
            <a href="Horario" class="btn">Ver Horarios</a>
        </section>

        <section class="movie">
        <img src="{!! asset('img/deapool.jpg') !!}">
            <h2>Película 2</h2>
            <p>En medio de un conflicto armado, dos almas se encuentran y deben luchar por su amor a pesar de las adversidades que les presenta la vida.</p>
            <a href="horarios.html" class="btn">Ver Horarios</a>
        </section>

        <section class="movie">
        <img src="{!! asset('img/deapool.jpg') !!}">
            <h2>Película 3</h2>
            <p>Una misión espacial se convierte en una carrera contra el tiempo cuando los astronautas descubren una amenaza que podría destruir la Tierra.</p>
            <a href="horarios.html" class="btn">Ver Horarios</a>
        </section>

        <section class="movie">
        <img src="{!! asset('img/deapool.jpg') !!}">
            <h2>Película 4</h2>
            <p>Un detective investiga un caso que lo lleva a descubrir oscuros secretos del pasado que podrían cambiar el curso de la historia.</p>
            <a href="horarios.html" class="btn">Ver Horarios</a>
        </section>

        <section class="movie">
        <img src="{!! asset('img/Deadpool.jpg') !!}">
            <h2>Película 1</h2>
            <p>Un grupo de amigos se embarca en una aventura épica a través de un mundo mágico donde deben enfrentar sus miedos y descubrir el verdadero significado de la amistad.</p>
            <a href="horarios.html" class="btn">Ver Horarios</a>
        </section>

        <section class="movie">
        <img src="{!! asset('img/deapool.jpg') !!}">
            <h2>Película 2</h2>
            <p>En medio de un conflicto armado, dos almas se encuentran y deben luchar por su amor a pesar de las adversidades que les presenta la vida.</p>
            <a href="horarios.html" class="btn">Ver Horarios</a>
        </section>

        <section class="movie">
        <img src="{!! asset('img/deapool.jpg') !!}">
            <h2>Película 3</h2>
            <p>Una misión espacial se convierte en una carrera contra el tiempo cuando los astronautas descubren una amenaza que podría destruir la Tierra.</p>
            <a href="horarios.html" class="btn">Ver Horarios</a>
        </section>

        <section class="movie">
        <img src="{!! asset('img/deapool.jpg') !!}">
            <h2>Película 4</h2>
            <p>Un detective investiga un caso que lo lleva a descubrir oscuros secretos del pasado que podrían cambiar el curso de la historia.</p>
            <a href="horarios.html" class="btn">Ver Horarios</a>
        </section>
    </div>
</main>
@endsection