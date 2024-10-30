@extends('layouts.app')

@section('content')
<body class="bg-gray-100">
    <div class="flex flex-col items-center justify-center min-h-screen">
        <!-- Título -->
        <h1 class="text-4xl font-bold mb-8">SELECCIONA TUS ASIENTOS</h1>

        <!-- Pantalla -->
        <div class="w-full max-w-4xl mb-8">
            <div class="bg-gray-400 text-center py-4 rounded-md text-black text-xl">PANTALLA</div>
        </div>

        <!-- Grilla de asientos -->
        <div class="grid grid-cols-13 gap-4">
            <!-- Letras de fila -->
            <div></div> <!-- Espacio vacío para la esquina superior izquierda -->
            <!-- Números de columna -->

            <!-- Fila A -->
            <div class="text-green-700 font-bold">A
            <button class="border border-green-700 rounded-md w-10 h-10">1</button>
            <button class="border border-green-700 rounded-md w-10 h-10">2</button>
            <button class="border border-green-700 rounded-md w-10 h-10">3</button>
            <button class="border border-green-700 rounded-md w-10 h-10">4</button>
            <button class="border border-green-700 rounded-md w-10 h-10">5</button>
            <button class="border border-green-700 rounded-md w-10 h-10">6</button>
            <button class="border border-green-700 rounded-md w-10 h-10">7</button>
            <button class="border border-green-700 rounded-md w-10 h-10">8</button>
            <button class="border border-green-700 rounded-md w-10 h-10">9</button>
            <button class="border border-green-700 rounded-md w-10 h-10">10</button>
            <button class="border border-green-700 rounded-md w-10 h-10">11</button>
            <button class="border border-green-700 rounded-md w-10 h-10">12</button>
            </div>

            <!-- Fila B -->
            <div class="text-green-700 font-bold">B
            <button class="border border-green-700 rounded-md w-10 h-10">1</button>
            <button class="border border-green-700 rounded-md w-10 h-10">2</button>
            <button class="border border-green-700 rounded-md w-10 h-10">3</button>
            <button class="border border-green-700 rounded-md w-10 h-10">4</button>
            <button class="border border-green-700 rounded-md w-10 h-10">5</button>
            <button class="border border-green-700 rounded-md w-10 h-10">6</button>
            <button class="border border-green-700 rounded-md w-10 h-10">7</button>
            <button class="border border-green-700 rounded-md w-10 h-10">8</button>
            <button class="border border-green-700 rounded-md w-10 h-10">9</button>
            <button class="border border-green-700 rounded-md w-10 h-10">10</button>
            <button class="border border-green-700 rounded-md w-10 h-10">11</button>
            <button class="border border-green-700 rounded-md w-10 h-10">12</button>
            </div>

            <!-- Fila C -->
            <div class="text-green-700 font-bold">C
            <button class="border border-green-700 rounded-md w-10 h-10">1</button>
            <button class="border border-green-700 rounded-md w-10 h-10">2</button>
            <button class="border border-green-700 rounded-md w-10 h-10">3</button>
            <button class="border border-green-700 rounded-md w-10 h-10">4</button>
            <button class="border border-green-700 rounded-md w-10 h-10">5</button>
            <button class="border border-green-700 rounded-md w-10 h-10">6</button>
            <button class="border border-green-700 rounded-md w-10 h-10">7</button>
            <button class="border border-green-700 rounded-md w-10 h-10">8</button>
            <button class="border border-green-700 rounded-md w-10 h-10">9</button>
            <button class="border border-green-700 rounded-md w-10 h-10">10</button>
            </div>

            <!-- Fila D -->
            <div class="text-green-700 font-bold">D
            <button class="border border-green-700 rounded-md w-10 h-10">1</button>
            <button class="border border-green-700 rounded-md w-10 h-10">2</button>
            <button class="border border-green-700 rounded-md w-10 h-10">3</button>
            <button class="border border-green-700 rounded-md w-10 h-10">4</button>
            <button class="border border-green-700 rounded-md w-10 h-10">5</button>
            <button class="border border-green-700 rounded-md w-10 h-10">6</button>
            <button class="border border-green-700 rounded-md w-10 h-10">7</button>
            <button class="border border-green-700 rounded-md w-10 h-10">8</button>
            <button class="border border-green-700 rounded-md w-10 h-10">9</button>
            <button class="border border-green-700 rounded-md w-10 h-10">10</button>
            </div>

            <!-- Fila E -->
            <div class="text-green-700 font-bold">E
            <button class="border border-green-700 rounded-md w-10 h-10">1</button>
            <button class="border border-green-700 rounded-md w-10 h-10">2</button>
            <button class="border border-green-700 rounded-md w-10 h-10">3</button>
            <button class="border border-green-700 rounded-md w-10 h-10">4</button>
            <button class="border border-green-700 rounded-md w-10 h-10">5</button>
            <button class="border border-green-700 rounded-md w-10 h-10">6</button>
            <button class="border border-green-700 rounded-md w-10 h-10">7</button>
            <button class="border border-green-700 rounded-md w-10 h-10">8</button>
            <button class="border border-green-700 rounded-md w-10 h-10">9</button>
            <button class="border border-green-700 rounded-md w-10 h-10">10</button>
            <button class="border border-green-700 rounded-md w-10 h-10">11</button>
            <button class="border border-green-700 rounded-md w-10 h-10">12</button>
            </div>

            <!-- Resto de filas (C-G) con estructura similar a las anteriores -->
            <!-- ... (puedes continuar de forma similar para las filas C, D, etc.) -->
        </div>
    </div>
</body>
@endsection
