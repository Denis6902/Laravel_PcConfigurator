<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $recommendedWattage = ['550', '650', '750'];
        $core_clock = $this->faker->numberBetween(1300, 1600);
        $name = rtrim($this->faker->sentence(2), '.');
        $chipset = rtrim($this->faker->sentence(2), '.');

        return [
            'name' => $name,
            'brand_id' => $this->faker->numberBetween(1, 10),
            'chipset' => $chipset,
            'memory' => $this->faker->randomElement($memory),
            'recommendedWattage' => $this->faker->randomElement($recommendedWattage),
            'core_clock' => $core_clock,
            'boost_clock' => $core_clock + $this->faker->numberBetween(200, 500),
            'color' => $this->faker->randomElement($color),
            'length' => $this->faker->numberBetween(200, 320),
            'rating' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(1500, 4000),
            'info' => $this->faker->sentence(80),
        ];
    }
}
