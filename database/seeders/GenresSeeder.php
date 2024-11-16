<?php

namespace Database\Seeders;

use App\Models\Genres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genre = new Genres();
        $genre->genre = "Acción"; 
        $genre->save();

        $genre2 = new Genres();
        $genre2->genre = "Aventura";
        $genre2->save();

        $genre3 = new Genres();
        $genre3->genre = "Ciencia Ficción";
        $genre3->save();

        $genre4 = new Genres();
        $genre4->genre = "Comedia";
        $genre4->save();

        $genre5 = new Genres();
        $genre5->genre = "Drama";
        $genre5->save();

        $genre6 = new Genres();
        $genre6->genre = "Fantasía";
        $genre6->save();

        $genre7 = new Genres();
        $genre7->genre = "Musical";
        $genre7->save();

        $genre8 = new Genres();
        $genre8->genre = "Suspenso";
        $genre8->save();

        $genre9 = new Genres();
        $genre9->genre = "Terror";
        $genre9->save();
    }
}
