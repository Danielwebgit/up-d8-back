<?php

namespace Database\Factories;
use Faker\Factory as FactoryF;

use Carbon\Carbon;
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
        $date = Carbon::now();

        return [
            'name' => $this->faker->name(),
            'cpf' => $fackerF->cpf(),
            'gender' => $fackerF->randomElement(['male', 'female']),
            'date_of_birth' => $date->year.'-'.str_pad($date->month, 2, '0', STR_PAD_LEFT).'-'.$date->day,
            'created_at' =>  new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }
}
