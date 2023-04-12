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
            ['title' => 'Acre','letter' => 'AC', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Alagoas', 'letter' => 'AL', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Amapá', 'letter' => 'AP', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Amazonas', 'letter' => 'AM', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Bahia', 'letter' => 'BA', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Ceará', 'letter' => 'CE', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Distrito Federal', 'letter' => 'DF', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Espírito Santo', 'letter' => 'ES', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Goiás', 'letter' => 'GO', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Maranhão', 'letter' => 'MA', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Mato Grosso', 'letter' => 'MT', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Mato Grosso do Sul', 'letter' => 'MS', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Minas Gerais', 'letter' => 'MG', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Pará', 'letter' => 'PA', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Paraíba', 'letter' => 'PB', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Paraná', 'letter' => 'PR', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Pernambuco', 'letter' => 'PE', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Piauí', 'letter' => 'PI', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Rio de Janeiro', 'letter' => 'RJ', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Rio Grande do Norte', 'letter' => 'RN', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Rio Grande do Sul', 'letter' => 'RS', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Rondônia', 'letter' => 'RO', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Roraima', 'letter' => 'RR', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Santa Catarina', 'letter' => 'SC', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'São Paulo', 'letter' => 'SP', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Sergipe', 'letter' => 'SE', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
            ['title' => 'Tocantins', 'letter' => 'TO', 'created_at' => '2023-04-10 22:29:44', 'updated_at' => '2023-04-10 22:29:44'],
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
