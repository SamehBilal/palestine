<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Region>
 */
class RegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'                      => fake()->name(),
            'code'                      => Str::random(8),
            'population'                => $this->faker->randomElement([1,2,3,4,5]),
            'color'                     => Str::random(8),
            'old'                       => $this->faker->randomElement([0,1]),
        ];
    }
}
