@extends('layouts.app')
@section('content')
  <link rel="stylesheet" href="{{asset('css/style_horario.css')}}">

<div class="header">
    <img src="{!! asset('img/Deadpool.jpg') !!}" alt="Imagen de fondo" class="background-image">
    <div class="overlay">
      <h1>Elige día y horario de tu película</h1>
    </div>
  </div>

  <div class="container">
    <div class="location">
      <button class="location-button">CineStar</button>
    </div>
    
    <div class="date-selector">
      <button class="date" onclick="showTimes('jueves')">Jueves<br><span>5 SEP</span></button>
      <button class="date" onclick="showTimes('viernes')">Viernes<br><span>6 SEP</span></button>
      <button class="date" onclick="showTimes('sabado')">Sábado<br><span>7 SEP</span></button>
      <button class="date" onclick="showTimes('domingo')">Domingo<br><span>8 SEP</span></button>
      <button class="date" onclick="showTimes('lunes')">Lunes<br><span>9 SEP</span></button>
      <button class="date" onclick="showTimes('martes')">Martes<br><span>10 SEP</span></button>
      <button class="date" onclick="showTimes('miercoles')">Miércoles<br><span>11 SEP</span></button>
    </div>

    <div class="showtime-section">
      <h2>Deadpool</h2>
      <p class="language">Doblada al español</p>
      <div id="showtimes" class="showtimes">
        <!-- Aquí se mostrarán los horarios según el día seleccionado -->
      </div>
    </div>
  </div>

  <script>
    const showTimes = (day) => {
    const showtimesContainer = document.getElementById('showtimes');
    showtimesContainer.innerHTML = ''; // Limpia los horarios anteriores
  
    // Horarios de ejemplo para cada día
    const schedules = {
      jueves: ['2:00 p.m.', '4:25 p.m.', '9:15 p.m.'],
      viernes: ['3:00 p.m.', '5:30 p.m.', '8:00 p.m.'],
      sabado: ['1:30 p.m.', '6:00 p.m.', '10:00 p.m.'],
      domingo: ['2:15 p.m.', '5:00 p.m.', '7:45 p.m.'],
      lunes: ['3:45 p.m.', '6:15 p.m.', '9:30 p.m.'],
      martes: ['4:00 p.m.', '7:00 p.m.', '9:45 p.m.'],
      miercoles: ['12:00 p.m.', '3:30 p.m.', '6:00 p.m.'],
    };
  
    // Crear botones de horarios según el día seleccionado
    schedules[day].forEach(time => {
      const timeButton = document.createElement('button');
      timeButton.className = 'showtime';
      timeButton.textContent = `${time}`;
      showtimesContainer.appendChild(timeButton);
    });
  };
  </script>
@endsection