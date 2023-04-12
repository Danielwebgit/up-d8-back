<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $states = [
            ['title' => 'Acre', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Alagoas', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Amapá', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Amazonas', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Bahia', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Ceará', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Distrito Federal', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Espírito Santo', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Goiás', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Maranhão', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Mato Grosso', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Mato Grosso do Sul', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Minas Gerais', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Pará', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Paraíba', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Paraná', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Pernambuco', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Piauí', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Rio de Janeiro', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Rio Grande do Norte', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Rio Grande do Sul', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Rondônia', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Roraima', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Santa Catarina', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'São Paulo', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Sergipe', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Tocantins', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
        ];

        asort($states);

        $result = [];

        foreach ($states as $name) {
            $result[] = [
                'title' => $name,
            ];
        }

        DB::table('address_states')->insert($states);

    }
}
