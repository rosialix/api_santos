<?php

namespace Database\Factories\Santos;

use Illuminate\Database\Eloquent\Factories\Factory;

class SantoSantoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'santo_name' => $this->faker->name() ,
            'name' => $this->faker->firstName() ,
            'last_name' => $this->faker->lastName(),
            'birth_date' => $this->faker->date(),
            'birth_of_death' => $this->faker->date(),
            'country' => $this->faker->country(),
            'location' => $this->faker->citySuffix(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'biography' => $this->faker->text(100),
            'galeria' => $this->faker->image(),
            'santo_santuario_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
