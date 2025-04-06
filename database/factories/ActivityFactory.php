<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Activity;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $locations = ['Jeju', 'Cebu', 'Nha Trang', 'Bali', 'Okinawa'];
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'location' => fake()->randomElement($locations),
            'price' => fake()->randomFloat(2, 30, 300),
            'image' => 'default.jpg',
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
        
    }
}