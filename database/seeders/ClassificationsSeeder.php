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
        $classification->name = "AA";
        $classification->save();

        $classification2 = new Classifications();
        $classification2->name = "A";
        $classification2->save();

        $classification3 = new Classifications();
        $classification3->name = "B";
        $classification3->save();

        $classification4 = new Classifications();
        $classification4->name = "C";
        $classification4->save();

        $classification5 = new Classifications();
        $classification5->name = "D";
        $classification5->save();
    }
}
