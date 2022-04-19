<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PcCaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = ['ATX Mid Tower', 'MicroATX Mini Tower', 'Mini ITX Desktop'];
        $color = ['Black', 'White'];


        return [
            'name' => $this->faker->sentence(3),
            'type' => $this->faker->randomElement($type),
            'color' => $this->faker->randomElement($color),
            'internal_5,25_bays' => $this->faker->numberBetween(0,6),
            'external_5,25_bays' => $this->faker->numberBetween(0,6),
            'rating' => $this->faker->numberBetween(1,5),
            'price' => $this->faker->numberBetween(1500, 4000),
        ];
    }
}
