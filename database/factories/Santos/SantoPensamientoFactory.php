<?php

namespace Database\Factories\Santos;

use Illuminate\Database\Eloquent\Factories\Factory;

class SantoPensamientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_origen' => $this->faker->date(),
            'thought' => $this->faker->paragraphs(2, true),
            'santo_santo_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
