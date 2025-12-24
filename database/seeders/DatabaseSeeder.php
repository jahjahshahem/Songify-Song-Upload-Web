<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 5 artists
        \App\Models\Artist::factory(5)->create();

        // Create 5 albums (each linked to an artist)
        \App\Models\Album::factory(5)->create();

        // Create 20 songs
        \App\Models\Song::factory(20)->create();
    }
}
