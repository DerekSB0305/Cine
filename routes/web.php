<?php

use App\Http\Controllers\Admin\AdminMovieController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MovieController;
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

/** Login */

Route::view('/login', "login")->name('login');
Route::view('/registro', "registro")->name('registro');
Route::view('/admin/peliculas', "admin")->middleware('auth')->name('admin');

Route::post('/validar-registro',[loginController::class, 'registro'])->name('validar-registro');
Route::post('/inicia-sesion', [loginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');


/**  Vistas del administrador **/

Route::get('/admin/peliculas', 
[AdminMovieController::class, 'index']);

Route::get('/admin/peliculas/crear',
[AdminMovieController::class, 'create']);

Route::post('/admin/peliculas/crear',
[AdminMovieController::class, 'save']);

Route::get('/admin/peliculas/{id}/editar',
[AdminMovieController::class, 'edit']);

Route::put('/admin/peliculas/{id}',
[AdminMovieController::class, 'update']) -> name('movies.update');

Route::delete('/admin/peliculas/{id}',
[AdminMovieController::class, 'destroy']);

/**  Vistas del usuario **/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 
[MovieController::class, 'index']);

Route::get('/detalles', 
[MovieController::class, 'details']);

Route::get('/cartelera', 
[MovieController::class, 'billboard']);

Route::get('/proximamente', 
[MovieController::class, 'comingSoon']);

Route::get('/horario', 
[MovieController::class, 'schedule']);