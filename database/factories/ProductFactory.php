<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<Product>
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
        $productPrefixes = ['Sweater', 'Shirt', 'Beanie', 'Jeans', 'Parka'];
        $companyPrefixes = ['Nike', 'New Balance', 'The North Face', 'Patagonia', 'Colombia'];

        return [
            'name' => Arr::random($companyPrefixes),
            'type' => Arr::random($productPrefixes),
            'description' => fake()->text(70),
            'price' => fake()->numberBetween(1000, 10000)
        ];
    }
}
