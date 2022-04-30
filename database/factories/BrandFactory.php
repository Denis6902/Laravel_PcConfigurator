<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $headquarters = ['USA', 'EU', 'Asia'];
        return [
            'name' => $this->faker->sentence(1),
            'headquarters' => $this->faker->randomElement($headquarters),
            'founded_in' => $this->faker->numberBetween(1900,2020),
            'info' => $this->faker->sentence(20),
        ];
    }
}
