<?php

namespace Database\Factories\Santos;

use Illuminate\Database\Eloquent\Factories\Factory;

class SantoSantuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName() ,
            'date_fundada' => $this->faker->date(),
            'history' => $this->faker->paragraphs(3, true),
            'country' => $this->faker->country(),
            'location' => $this->faker->citySuffix(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
        ];
    }
}
