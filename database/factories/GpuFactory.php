<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory
 */
class GpuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $color = ['Černá', 'Bílá'];
        $memory = ['4', '8', '6', '12', '24'];
        $core_clock = $this->faker->numberBetween(1300, 1600);
        $name = substr($this->faker->sentence(3), 0, -1);


        return [
            'name' => $name,
            'brand_id' => $this->faker->numberBetween(1,10),
            'chipset' => $this->faker->sentence(3),
            'memory' => $this->faker->randomElement($memory),
            'core_clock' => $core_clock,
            'boost_clock' => $core_clock + $this->faker->numberBetween(200, 500),
            'color' => $this->faker->randomElement($color),
            'length' => $this->faker->numberBetween(200,320),
            'rating' => $this->faker->numberBetween(1,5),
            'price' => $this->faker->numberBetween(1500, 4000),
        ];
    }
}
