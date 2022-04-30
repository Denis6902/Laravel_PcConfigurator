<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory
 */
class MonitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $resolution = ['1920 x 1080','3840 x 2160','5120 x 1440','2560 x 1440'];
        $refresh_rate = ['60','120','144','165','240'];
        $panel_type = ['IPS','TN','VA'];

        return [
            'name' => $this->faker->sentence(3),
            'brand_id' => $this->faker->numberBetween(1,10),
            'size' => $this->faker->numberBetween(22,50),
            'resolution' => $this->faker->randomElement($resolution),
            'refresh_rate' => $this->faker->randomElement($refresh_rate),
            'panel_type' => $this->faker->randomElement($panel_type),
            'rating' => $this->faker->numberBetween(1,5),
            'price' => $this->faker->numberBetween(1500, 4000),
        ];
    }
}
