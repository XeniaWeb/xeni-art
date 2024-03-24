<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'description' => 'IT Company ' . fake()->words(3, true),
            'email' => fake()->unique()->safeEmail(),
            'web_site' => fake()->url(),
            'city' => fake()->city(),
            'address' => fake()->address(),
            'contact' => fake()->name() . ', ' . fake()->phoneNumber(),
            'comment' => 'Comment to ' . fake()->words(2, true),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
