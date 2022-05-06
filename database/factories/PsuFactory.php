<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory
 */
class PsuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $capacity = ['ATX', 'SFX'];
        $type = ['Gold', 'Platinum', 'Bronze'];
        $wattage = ['550', '650', '750'];
        $modular = ['Plně','Semi', 'Není'];
        $name = substr($this->faker->sentence(3), 0, -1);


        return [
            'name' => $name,
            'brand_id' => $this->faker->numberBetween(1,10),
            'formFactor' => $this->faker->randomElement($capacity),
            'efficiencyRating' => $this->faker->randomElement($type),
            'wattage' => $this->faker->randomElement($wattage),
            'modular' => $this->faker->randomElement($modular),
            'rating' => $this->faker->numberBetween(1,100),
            'price' => $this->faker->numberBetween(1500, 4000),
        ];
    }
}
