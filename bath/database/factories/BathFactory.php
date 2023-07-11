<?php

namespace Database\Factories;

use App\Models\Bath;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bath>
 */
class BathFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'bath_name' => $this->faker->word,
            'prefecture_id' => $this->faker->number,
            'address' => $this->faker->string,
            'user_id' => $this->faker->numberBetween(1,3),
            //
        ];
    }
}
