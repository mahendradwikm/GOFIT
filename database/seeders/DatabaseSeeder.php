<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\SportSeeder;
use Database\Seeders\VenueSeeder;
use Database\Seeders\ArticleSeeder;
use Database\Seeders\FacilitiesSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // WithoutModelEvents::class;
        $this->call([
            SportSeeder::class,
            ArticleSeeder::class,
            VenueSeeder::class,
            FacilitiesSeeder::class,
            UserSeeder::class,
            // FieldSeeder::class,
            // BookingSeeder::class,
        ]);
    }
}
