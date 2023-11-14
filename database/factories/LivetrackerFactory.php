<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livetracker>
 */
class LivetrackerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'total_deaths'                                      => $this->faker->randomElement([1,2,3,4,5]),
            'women_deaths'                                      => $this->faker->randomElement([1,2,3,4,5]),
            'children_deaths'                                   => $this->faker->randomElement([1,2,3,4,5]),
            'elders_deaths'                                     => $this->faker->randomElement([1,2,3,4,5]),
            'total_injuries'                                    => $this->faker->randomElement([1,2,3,4,5]),
            'total_displaced'                                   => $this->faker->randomElement([1,2,3,4,5]),
            'other_side_deaths'                                 => $this->faker->randomElement([1,2,3,4,5]),
            'other_side_injuries'                               => $this->faker->randomElement([1,2,3,4,5]),
            'last_update'                                       => now(),
            'total_destroyed_residential_units'                 => $this->faker->randomElement([1,2,3,4,5]),
            'total_medical_deaths'                              => $this->faker->randomElement([1,2,3,4,5]),
            'total_hospitals_broken'                            => $this->faker->randomElement([1,2,3,4,5]),
            'total_clinics_broken'                              => $this->faker->randomElement([1,2,3,4,5]),
            'total_ambulances_broken'                           => $this->faker->randomElement([1,2,3,4,5]),
            'total_ambulances_semi_broken'                      => $this->faker->randomElement([1,2,3,4,5]),
            'total_medical_injured'                             => $this->faker->randomElement([1,2,3,4,5]),
        ];
    }
}
