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
    public function definition()
    {
        return [
            //
            'product_name' => $this->faker->product_name,
            'price' => fake()->randomFloat(2,100, 50000),
            'quantity' => fake()->randomNumber(4),
            'description' => fake()->sentence(3),

        ];
    }
}
