<?php

namespace Database\Factories\Santos;

use Illuminate\Database\Eloquent\Factories\Factory;

class SantoCronologiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'ano' => $this->faker->date(),
            'history' => $this->faker->paragraphs(2, true),
            'country' => $this->faker->country(),
            'location' => $this->faker->citySuffix(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'santo_santo_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
