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
            'name' => fake()-> word(),
            'information' => fake()-> text(),
            'address' => fake()-> address(),
            'admin_id' => Admin::factory(),
            'prefcture_category_id' => fake()-> numberBetween(1, 47),
        ];
    }
}
