<?php

namespace Database\Factories;

use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nome" => $this->faker->name(),
            "raca" => $this->faker->name(),
            "microchip" => $this->faker->text(10),
            "nascimento" => $this->faker->date(),
            "sexo" => "M",
            "tutor_id" => Tutor::factory()->create()->id
        ];
    }
}
