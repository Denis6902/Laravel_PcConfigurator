<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $typeList = ['DDR4', 'DDR5'];
        $speedDDR4 = ['2133','2400','2666', '3200', '3600'];
        $speedDDR5 = ['6400', '6200', '6000', '5600', '5200'];
        $casLatencyDDR4  = ['14','16','18', '20'];
        $casLatencyDDR5 = ['32', '40', '36', '38'];
        $modules = ['2 x 16', '2 x 8', '1 x 8', '1 x 16', '4 x 8', '4 x 16'];
        $color = ['Černá', 'Bílá'];
        $type = $this->faker->randomElement($typeList);


        if($type == 'DDR4'){
            $speed = $this->faker->randomElement($speedDDR4);
            $latency = $this->faker->randomElement($casLatencyDDR4);
        }
        else{
            $speed = $this->faker->randomElement($speedDDR5);
            $latency = $this->faker->randomElement($casLatencyDDR5);
        }

        return [
            'name' => $this->faker->sentence(3),
            'type' => $type,
            'speed' => $speed,
            'modules' => $this->faker->randomElement($modules),
            'color' => $this->faker->randomElement($color),
            'latency' => $latency,
            'rating' => $this->faker->numberBetween(1,5),
            'price' => $this->faker->numberBetween(1500, 4000),
        ];
    }
}
