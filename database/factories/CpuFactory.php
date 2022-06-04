<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class CpuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tdp = ['65', '125', '105', '95'];
        $cores = ['4', '6', '8', '12', '16'];
        $clock = ['3.7', '2.5', '3.6', '2.6', '4.1'];
        $supportedRamType = [1, 2];
        $name = $this->faker->sentence(2);
        $name = str_replace('.', '', $name);

        return [
            'name' => $name,
            'brand_id' => $this->faker->numberBetween(1, 10),
            'clock' => $this->faker->randomElement($clock),
            'cores' => $this->faker->randomElement($cores),
            'tdp' => $this->faker->randomElement($tdp),
            'socket_id' => $this->faker->numberBetween(1, 4),
            'i_gpu' => $this->faker->sentence(2),
            'smt_or_ht' => $this->faker->boolean(),
            'rating' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(1500, 4000),
            'info' => $this->faker->sentence(80),
            'illustration_image_id' => 1,
            'supported_ram_type_id' => $this->faker->randomElement($supportedRamType),

        ];
    }
}
