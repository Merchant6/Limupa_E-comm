<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            return [
                'name' => fake()->name,
                's_description' => fake()->text(35),
                'l_description' => fake()->text(200),
                'category' => fake()->randomElement(['clothing', 'mobiles', 'computer']),
                'image_src' => fake()->image('public/images',640,480, null, false),
                'quantity' => fake()->numerify('####'),
                'price' =>  fake()->numerify('####'),
            ];
    }
}
