<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
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
            'first_letter'              => Str::random(1),
            'alternative_id'            => $this->faker->randomElement([1,2,3,4,5]),
            'made_by'                   => $this->faker->randomElement([1,2,3,4,5]),
        ];
    }
}
