<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $name = $this->faker->sentence(2);
        $name = str_replace('.', '', $name);


        return [
            'name' => $name,
            'headquarters' => $this->faker->randomElement($headquarters),
            'founded_in' => $this->faker->numberBetween(1900, 2020),
            'info' => $this->faker->sentence(80),
        ];
    }
}
