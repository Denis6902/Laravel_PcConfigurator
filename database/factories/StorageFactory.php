<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
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
        $capacity = ['128', '256','512','1024','2048'];
        $type = ['SSD', 'HDD'];
        if('type' == 'HDD'){
            $interface = 'SATA';
            }
        else {
            $interface = ['M.2', 'SATA'];
        }

        return [
            'name' => $this->faker->sentence(3),
            'capacity' => $this->faker->randomElement($capacity),
            'type' => $this->faker->randomElement($type),
            'interface' => $this->faker->randomElement($interface),
            'rating' => $this->faker->numberBetween(1,5),
            'price' => $this->faker->numberBetween(500, 2500),
        ];
    }
}
