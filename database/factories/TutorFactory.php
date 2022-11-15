<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nome_completo" => $this->faker->name(),
            "email" => $this->faker->email,
            "senha" => $this->faker->text(10),
            "endereco" => $this->faker->address,
            "bairro" => $this->faker->text(10),
            "complemento" => null,
            "estado" => "SP",
            "cidade" => "Votuporanga",
            "cep" => null,
            "nascimento" => $this->faker->date(),
            "sexo" => "M"
        ];
    }
}
