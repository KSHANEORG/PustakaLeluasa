<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bookname' => fake()->sentence(3),
            'imageurl' => '/buku.png', // Default placeholder
            'specialbookid' => fake()->unique()->slug(),
            'price' => fake()->numberBetween(100000, 300000),
            'views' => fake()->numberBetween(100, 10000),
            'description' => fake()->paragraph(),
        ];
    }
}
