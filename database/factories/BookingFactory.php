<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\User;
use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
protected $model = Booking::class;

public function definition(): array
{
  return [
    'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(), // fallback 가능
    'activity_id' => Activity::inRandomOrder()->first()?->id ?? Activity::factory(),
    'booking_date' => $this->faker->dateTimeBetween('now', '+7 days')->format('Y-m-d'),
    'people_count' => $this->faker->numberBetween(1, 6),
    'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
];
}
}