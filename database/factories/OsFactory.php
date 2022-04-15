<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class OsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $mode = ['32-bit', '64-bit'];
        $version = ['10', '11'];
        $edition = ['Home', 'Pro'];

        if('mode' == '32-bit'){
            $maximumMemory = '4';
        }
        else if('edition' == 'Home'){
            $maximumMemory = '128';
        }
        else {
            $maximumMemory = '2048';
        }

        return [
            'name' => 'Microsoft Windows ',
            'version' => $this->faker->randomElement($version),
            'edition' => $this->faker->randomElement($edition),
            'mode' => $this->faker->randomElement($mode),
            'maximumMemory' => $maximumMemory,
            'rating' => $this->faker->numberBetween(0,5),
            'price' => $this->faker->numberBetween(1500, 4000),
        ];
    }
}
