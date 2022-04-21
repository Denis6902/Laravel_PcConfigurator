<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory
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
        $modeList = ['32-bit', '64-bit'];
        $versionList = ['10', '11'];
        $editionList = ['Home', 'Pro'];

        $mode = $this->faker->randomElement($modeList);
        $version = $this->faker->randomElement($versionList);
        $edition = $this->faker->randomElement($editionList);

        if($mode == "32-bit"){
            $maximumMemory = '4';
        }
        else if($edition == 'Home'){
            $maximumMemory = '128';
        }
        else {
            $maximumMemory = '2048';
        }


        return [
            'name' => 'Microsoft Windows ',
            'version' => $version,
            'edition' => $edition,
            'mode' => $mode,
            'maximumMemory' => $maximumMemory,
            'rating' => $this->faker->numberBetween(1,5),
            'price' => $this->faker->numberBetween(1500, 4000),
        ];
    }
}
