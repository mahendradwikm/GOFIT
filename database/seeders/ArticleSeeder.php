<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $article = [
            [
                'title' => 'Lapangan Futsal',
                'image' => 'images/venue/futsal.png',
                'slug' => 'lapangan-futsal',
                'description' => 'Lapangan futsal dengan ukuran 20m x 40m',

            ],
            [
                'title' => 'Lapangan Basket',
                'image' => 'images/venue/basket.png',
                'slug' => 'lapangan-basket',
                'description' => 'Lapangan basket dengan ukuran 20m x 40m',
            ]
        ];
        
        foreach ($article as $key => $value) {
            Article::create($value);
        }
    }
}
