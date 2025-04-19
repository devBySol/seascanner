<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;
use App\Models\Category;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        $activities = [
            'Diving' => ['Scuba Adventure', 'Deep Sea Dive'],
            'Snorkeling' => ['Coral Reef Snorkeling', 'Lagoon Explorer'],
            'Boat' => ['Sunset Cruise', 'Island Hopping'],
            'Jet Ski' => ['Jet Ski Blast', 'Ocean Rush'],
            'Surfing' => ['Beginner Surf', 'Wave Master'],
        ];

        foreach ($activities as $categoryName => $activityNames) {
            $category = Category::where('name', $categoryName)->first();

            foreach ($activityNames as $name) {
                Activity::create([
                    'title' => $name,
                    'category_id' => $category->id,
                    'description' => fake()->paragraph(),
                    'price' => fake()->numberBetween(50, 300),
                    'location' => fake()->city(),
                    'duration' => fake()->numberBetween(1, 4) . ' hours',
                ]);
            }
        }
    }
}