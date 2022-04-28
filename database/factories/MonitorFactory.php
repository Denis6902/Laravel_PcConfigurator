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
        /*
         *
         *         $modeList = ['32-bit', '64-bit'];
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
         */

        $resolution = ['1920 x 1080','3840 x 2160','5120 x 1440','2560 x 1440'];
        $refresh_rate = ['60','120','144','165','240'];
        $panel_type = ['IPS','TN','VA'];

        return [
            'name' => $this->faker->sentence(3),
            'size' => $this->faker->numberBetween(22,50),
            'resolution' => $this->faker->randomElement($resolution),
            'refresh_rate' => $this->faker->randomElement($refresh_rate),
            'panel_type' => $this->faker->randomElement($panel_type),
            'rating' => $this->faker->numberBetween(1,5),
            'price' => $this->faker->numberBetween(1500, 4000),
        ];
    }
}
