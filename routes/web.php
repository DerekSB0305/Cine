<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Seats/', function () {
    return view('Seats');
});

Route::get('/cartelera', function(){
    return view('cartelera');
});

Route::get('/admin', function(){
    return view('admin');
});

Route::get('/Horario', function(){
    return view('Horario');
});

Route::get('/soon2', function(){
    return view('soon2');
});

Route::get('/addMovies', function(){
    return view('addMovies');
});
Route::get('/login', function(){
    return view('login');
});

Route::get('/personalData', function(){
    return view('/personalData');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/detalles', function () {
    return view('details');
});