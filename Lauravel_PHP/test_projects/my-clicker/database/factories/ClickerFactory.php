<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Clicker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clicker>
 */
class ClickerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'startCount' => $this->faker->numberBetween(0, 1),
            'clicks' => $this->faker->numberBetween(1, 20),
            'endCount' => $this->faker->numberBetween(1, 21),
        ];
    }
}
