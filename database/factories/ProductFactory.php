<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->sentence(2),
            'description' => fake()->paragraph(),
            'price' => fake()->randomDigit(2, 1, 1000),
            'image_url' => fake()->imageUrl(
                $width = 640,
                $height = 480,
            ),
        ];
    }
}
