<?php

namespace Database\Factories;
use Faker\Factory as FactoryF;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fackerF = FactoryF::create('pt_BR');

        return [
            'name' => $this->faker->name(),
            'cpf' => $fackerF->cpf(),
            'gender' => $fackerF->randomElement(['male', 'female']),
            'date_of_birth' => new DateTime(),
            'created_at' =>  new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }
}
