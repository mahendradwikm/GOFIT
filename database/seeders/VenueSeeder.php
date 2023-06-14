<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Venue;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Object 
        $detail = [
            'size' => '20m x 40m',
            'capacity' => '10 - 20 orang',
            'facility' => 'Bola, Ring, Papan Skor',
        ];
        $venue = [
            [
                'name' => 'Lapangan Futsal',
                'address' => 'Jl. Raya Cipadung No. 1, Cibiru, Kec. Cileunyi, Bandung, Jawa Barat 40625',
                'image' => 'images/venue/futsal.png',
                'sport_id' => '1',
                'price' => '100000',
                'detail' => json_encode($detail),
                'description' => 'Lapangan futsal dengan ukuran 20m x 40m',
            ],
            [
                'name' => 'Lapangan Basket',
                'address' => 'Jl. Raya Cipadung No. 1, Cibiru, Kec. Cileunyi, Bandung, Jawa Barat 40625',
                'image' => 'images/venue/basket.png',
                'detail' => json_encode($detail),
                'sport_id' => '1',
                'price' => '100000',
                'description' => 'Lapangan basket dengan ukuran 20m x 40m',
            ]
        ];

        foreach ($venue as $key => $value) {
            Venue::create($value);
        }
    }
}
