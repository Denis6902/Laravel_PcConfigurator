<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory
 */
class CpuCoolerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $color = ['Bílá', 'Černá'];
        $fan_rpm = ['500 - 1800', '500 - 1500', '900 - 1800', '500 -  2000', '1800'];
        $noise_level = ['22.5', '14 - 25', '28', '4 - 25', '25', '15 - 38'];
        $aio = $this->faker->boolean();

        if ($aio == null) {
            $radiator_size = ['240', '280', '360', '120', '140'];
        } else {
            $radiator_size = ['0'];
        }


        return [
            'name' => $this->faker->sentence(3),
            'brand_id' => $this->faker->numberBetween(1, 10),
            'fan_rpm' => $this->faker->randomElement($fan_rpm),
            'noise_level' => $this->faker->randomElement($noise_level),
            'color' => $this->faker->randomElement($color),
            'radiator_size' => $this->faker->randomElement($radiator_size),
            'height' => $this->faker->numberBetween(27, 70),
            'rating' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(1500, 4000),
            'info' => $this->faker->sentence(80),
        ];
    }
}
