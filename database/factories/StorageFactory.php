<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class StorageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $capacity = ['128', '256', '512', '1024', '2048'];
        $type = ['SSD', 'HDD'];
        $name = $this->faker->sentence(2);
        $name = str_replace('.', '', $name);

        if ('type' == 'HDD') {
            $interface = 'SATA';
        } else {
            $interface = ['M.2', 'SATA'];
        }

        return [
            'name' => $name,
            'brand_id' => $this->faker->numberBetween(1, 10),
            'capacity' => $this->faker->randomElement($capacity),
            'type' => $this->faker->randomElement($type),
            'interface' => $this->faker->randomElement($interface),
            'rating' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(500, 2500),
            'info' => $this->faker->sentence(80),
            'illustration_image_id' => 6,
        ];
    }
}
