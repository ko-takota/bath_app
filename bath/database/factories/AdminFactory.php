<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'manage_bath_id' => fake()->numberBetween(1, 100),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ];
    }
}
