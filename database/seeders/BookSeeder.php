<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = Book::factory(20)->create();
        $categories = Category::all();

        if ($categories->isEmpty()) {
            return;
        }

        foreach ($books as $book) {
            // Assign 1-3 random categories to each book
            $randomCategories = $categories->random(rand(1, min(3, $categories->count())));
            $book->categories()->attach($randomCategories->pluck('id')->toArray());
        }
    }
}
