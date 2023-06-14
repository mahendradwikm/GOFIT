<?php

namespace Database\Seeders;

use App\Models\Facilities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facilities::create([
            'name' => 'Parking',
            'icon' => '/images/fasilitas/parking.png',
        ]);
        Facilities::create([
            'name' => 'Toilet',
            'icon' => '/images/fasilitas/toilet.png',
        ]);
        Facilities::create([
            'name' => 'Free wifi access',
            'icon' => '/images/fasilitas/wifi.png',
        ]);
        Facilities::create([
            'name' => 'Kantin',
            'icon' => '/images/fasilitas/kantin.png',
        ]);
    }
}
