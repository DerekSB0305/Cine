<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movies;
use Illuminate\Http\Request;

class AdminMovieController extends Controller
{
    public function index()
    {
        $movies = Movies::get();

        return view('admin.movies.index',
        compact('movies'));
    }

    public function create()
    {
        return view('admin.movies.create');
    }

    public function save(Request $request)
    {
        //Validación
        $request->validate([
            'title' => ['required', 'string'],
            'duration' => ['required', 'string'],
            'synopsis' => ['required', 'string']
        ]);
        //Insertar Datos
        Movies::create([
           'title' => $request->title,
           'genre_id' => $request->genre_id,
           'duration' => $request->duration,
           'classification_id' => $request->classification_id,
           'synopsis' => $request->synopsis,
           'movie_img' => $request->movie_img 
        ]);
         return redirect(url('/admin/peliculas'));
    }

    Public function destroy(Request $request)
    {
        Movies::destroy($request->id);

        return redirect(url('/admin/peliculas'));
    }
}
