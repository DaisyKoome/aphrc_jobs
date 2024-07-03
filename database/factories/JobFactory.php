<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'deadline' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'category' => $this->faker->word,
            'status' => $this->faker->randomElement(['open', 'closed', 'pending'])
        ];
    }
}
