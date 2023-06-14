<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sport = [
            [
                'name' => 'Futsal',
                'image' => 'images/sport/futsal.png',
            ],
            [
                'name' => 'Basket',
                'image' => 'images/sport/basket.png',
            ], 
            [
                'name' => 'Badminton',
                'image' => 'images/sport/badminton.png',
            ],
            [
                'name' => 'Gym dan Fitness',
                'image' => 'images/sport/gym.png',
            ]
        ];

        foreach ($sport as $key => $value) {
            Sport::create($value);
        }
    }
}
