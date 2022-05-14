<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class MotherboardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $socket = ['AM4', 'LGA-1700', 'LGA-1200', 'LGA-1151'];
        $type = ['ATX', 'MicroATX', 'Mini'];
        $maximumMemory = ['64', '128'];
        $memorySlots = ['2', '4'];
        $color = ['Černá', 'Bílá'];
        $name = substr($this->faker->sentence(3), 0, -1);


        return [
            'name' => $name,
            'brand_id' => $this->faker->numberBetween(1, 10),
            'wifi' => $this->faker->boolean(),
            'socket' => $this->faker->randomElement($socket),
            'type' => $this->faker->randomElement($type),
            'maximumMemory' => $this->faker->randomElement($maximumMemory),
            'memorySlots' => $this->faker->randomElement($memorySlots),
            'color' => $this->faker->randomElement($color),
            'rating' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(1500, 4000),
            'info' => $this->faker->sentence(80),
        ];
    }
}
