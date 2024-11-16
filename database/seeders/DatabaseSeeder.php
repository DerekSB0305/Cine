<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Classifications;
use App\Models\Schedule;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // $this->call([
        //     ReservationSeeder::class,
        // ]);

        // $this->call([
        //     TicketSeeder::class,
        // ]);

        // $this->call([
        //     ClientSeeder::class,
        // ]);

        // $this->call([
        //     ScheduleSeeder::class,
        // ]);

        $this->call(GenresSeeder::class);

        $this->call(ClassificationsSeeder::class);
    }
}
