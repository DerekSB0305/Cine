<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
       $movies = Movies::all();
       return view('movies.index', compact('movies'));
    }

    public function details()
    {
        return view('movies.details');
    }

    public function billboard()
    {
        return view('movies.billboard');
    }

    public function comingSoon()
    {
        return view('movies.comingSoon');
    }

    public function schedule($id)
    {
        // Buscar la película por ID
        $movie = Movies::findOrFail($id);

        // Pasar la película a la vista
        return view('movies.schedule', compact('movie'));
    }
  
}



