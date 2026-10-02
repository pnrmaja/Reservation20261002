<?php

namespace Database\Factories;

use App\Models\Airlane;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Airlane>
 */
class AirlaneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'country'=>fake()->country(),
            
        ];
    }
}
