<?php

namespace Database\Seeders;

use App\Models\Classifications;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classification = new Classifications();
        $classification->classification = "AA";
        $classification->save();

        $classification2 = new Classifications();
        $classification2->classification = "A";
        $classification2->save();

        $classification3 = new Classifications();
        $classification3->classification = "B";
        $classification3->save();

        $classification4 = new Classifications();
        $classification4->classification = "C";
        $classification4->save();

        $classification5 = new Classifications();
        $classification5->classification = "D";
        $classification5->save();
    }
}
