<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class MemoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $typeList = [1, 2];
        $speedDDR4 = ['2133', '2400', '2666', '3200', '3600'];
        $speedDDR5 = ['6400', '6200', '6000', '5600', '5200'];
        $casLatencyDDR4 = ['14', '16', '18', '20'];
        $casLatencyDDR5 = ['32', '40', '36', '38'];
        $modules = ['1', '2'];
        $capacity = ['4', '8', '16', '32', '64'];
        $color = ['Černá', 'Bílá'];
        $type = $this->faker->randomElement($typeList);
        $name = $this->faker->sentence(2);
        $name = str_replace('.', '', $name);

        if ($type == 1) {
            $speed = $this->faker->randomElement($speedDDR4);
            $latency = $this->faker->randomElement($casLatencyDDR4);
        } else {
            $speed = $this->faker->randomElement($speedDDR5);
            $latency = $this->faker->randomElement($casLatencyDDR5);
        }

        return [
            'name' => $name,
            'brand_id' => $this->faker->numberBetween(1, 10),
            'supported_ram_type_id' => $type,
            'speed' => $speed,
            'modules' => $this->faker->randomElement($modules),
            'capacity' => $this->faker->randomElement($capacity),
            'color' => $this->faker->randomElement($color),
            'latency' => $latency,
            'rating' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(1500, 4000),
            'info' => $this->faker->sentence(80),
            'illustration_image_id' => 5,
        ];
    }
}
