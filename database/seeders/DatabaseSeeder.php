<?php

namespace Database\Seeders;

use App\Models\Book;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Review;
use Database\Factories\BookFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Book::factory(33)->create()->each(function ($book){
            $randomReviews = random_int(5, 30);
            Review::factory()->count($randomReviews)
                ->good()
                ->for($book)
                ->create();
        });

        Book::factory(33)->create()->each(function ($book){
            $randomReviews = random_int(5, 30);
            Review::factory()->count($randomReviews)
                ->average()
                ->for($book)
                ->create();
        });

        Book::factory(34)->create()->each(function ($book){
            $randomReviews = random_int(5, 30);
            Review::factory()->count($randomReviews)
                ->bad()
                ->for($book)
                ->create();
        });
    }
}
