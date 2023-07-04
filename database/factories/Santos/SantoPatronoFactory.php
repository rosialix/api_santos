<?php

namespace Database\Factories\Santos;

use Illuminate\Database\Eloquent\Factories\Factory;

class SantoPatronoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_fundada' => $this->faker->date(),
            'history_community' => $this->faker->paragraphs(2, true),
            'country' => $this->faker->country(),
            'location' => $this->faker->citySuffix(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'santo_santo_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
