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
        $genre->name = "Acción"; 
        $genre->save();

        $genre2 = new Genres();
        $genre2->name = "Aventura";
        $genre2->save();

        $genre3 = new Genres();
        $genre3->name = "Ciencia Ficción";
        $genre3->save();

        $genre4 = new Genres();
        $genre4->name = "Comedia";
        $genre4->save();

        $genre5 = new Genres();
        $genre5->name = "Drama";
        $genre5->save();

        $genre6 = new Genres();
        $genre6->name = "Fantasía";
        $genre6->save();

        $genre7 = new Genres();
        $genre7->name = "Musical";
        $genre7->save();

        $genre8 = new Genres();
        $genre8->name = "Suspenso";
        $genre8->save();

        $genre9 = new Genres();
        $genre9->name = "Terror";
        $genre9->save();
    }
}
