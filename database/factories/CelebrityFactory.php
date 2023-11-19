<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Celebrity>
 */
class CelebrityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'                  => fake()->name(),
            'ar_name'               => fake()->name(),
            'first_letter'          => Str::random(1),
            'first_ar_letter'       => Str::random(1),
            'words'                 => fake()->name(),
            'country_id'            => $this->faker->randomElement([1,2,3,4,5]),
        ];
    }
}
