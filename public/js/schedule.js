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

  // Función para mostrar los horarios según el día seleccionado
  const showTimes = (day) => {
    const showtimesContainer = document.getElementById('showtimes');
    showtimesContainer.innerHTML = ''; // Limpia los horarios anteriores

    // Crear botones de horarios según el día seleccionado
    schedules[day].forEach(time => {
      const timeButton = document.createElement('button');
      timeButton.className = 'bg-blue-600 text-white py-2 px-6 rounded-xl shadow-md hover:bg-blue-700 transition duration-300';
      timeButton.textContent = time;
      showtimesContainer.appendChild(timeButton);
    });
  };