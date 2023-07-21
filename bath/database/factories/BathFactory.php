<?php

namespace Database\Factories;

use App\Models\Admin;
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
            'bath_name' => fake()-> word(),
            'information' => fake()-> text(),
            'price' => fake()-> numberBetween(3500, 15000),
            'address' => fake()-> address(),
            'admin_id' => Admin::factory(),
            'prefcture_category_id' => fake()-> numberBetween(1, 47),
        ];
    }
}
