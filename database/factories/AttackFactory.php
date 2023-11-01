<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attack>
 */
class AttackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'total_deaths'              => $this->faker->randomElement([1,2,3,4,5]),
            'women_deaths'              => $this->faker->randomElement([1,2,3,4,5]),
            'children_deaths'           => $this->faker->randomElement([1,2,3,4,5]),
            'elders_deaths'             => $this->faker->randomElement([1,2,3,4,5]),
            'total_injuries'            => $this->faker->randomElement([1,2,3,4,5]),
            'total_displaced'           => $this->faker->randomElement([1,2,3,4,5]),
            'other_side_deaths'         => $this->faker->randomElement([1,2,3,4,5]),
            'other_side_injuries'       => $this->faker->randomElement([1,2,3,4,5]),
            'duration'                  => $this->faker->randomElement([1,2,3,4,5]),
            'date_of_occurance'         => now(),
            'region_id'                 => $this->faker->randomElement([1,2,3,4,5]),
        ];
    }
}
