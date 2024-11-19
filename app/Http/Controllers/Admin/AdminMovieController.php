<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
           'image_url' => $request->image_url 
        ]);
        
         return redirect(url('/admin/peliculas'));
    }

    public function edit(Request $request)
    {
        $movies = Movies::find($request -> id);
        return view('admin.movies.edit', compact('movies'));
    }

    public function update (Request $request,$id)
    {
        $path = Storage::put('public', $request->image);

        $movies = Movies::find($request -> id);

        $movies -> update([
            'title' => $request->title,
            'genre_id' => $request->genre_id,
            'duration' => $request->duration,
            'classification_id' => $request->classification_id,
            'synopsis' => $request->synopsis,
            'image_url' =>$path,
        ]);
        return redirect(url('/admin/peliculas'));
    }
    Public function destroy(Request $request)
    {
        Movies::destroy($request->id);

        return redirect(url('/admin/peliculas'));
    }
}
